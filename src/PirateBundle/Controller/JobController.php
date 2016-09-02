<?php 

namespace PirateBundle\Controller;

use PirateBundle\Entity\JobSubmission;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use SendGrid;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

class JobController extends Controller
{
    
    /**
     * @Route("/job/another")
     * 
     */
    public function anotherAction()
    {
    	$repository = $this -> getDoctrine() -> getRepository('PirateBundle:JobSubmission');
    	
    	//$jobs = $repository -> findByEmail("despode@gmail.com");
    	$job = $repository -> findOneById(3);
    	
    	print "<pre>job is: "; print_r($job); print "</pre>";
    	
    	if(is_null($job)) echo "Job doesn't exist"; return new Response("The job with this id doesn't exist");
    	
    	$job -> setStatus("TAI");
    	
    	
    	
    	$em = $this -> getDoctrine() -> getManager();
    	$em -> persist($job);
    	$em -> flush();
    	
    	//print "<pre>"; print_r($jobs); print "</pre>";
    	
    	return new Response("<html><body> hey </body></html>");
    	
    }
    
    /**
     * @Route("/job/new")
     * 
     */
    public function newAction(Request $request)
    {
    	//Make the entity to be used to fill the below form
    	$jobSubmission = new JobSubmission();
    	$jobSubmission->setTitle('Write a title here');
    	$jobSubmission->setDescription('Write a description here');
    	$jobSubmission->setStatus('QUO');
    
    	//Create the form with proper fields to be filled with above entity's values
    	$form = $this->createFormBuilder($jobSubmission)
    	->add('title', TextType::class)
    	->add('description', TextType::class)
    	->add('email', TextType::class)
    	->add('status', HiddenType::class)
    	->add('save', SubmitType::class, array('label' => 'Submit the job ad'))
    	->getForm();
    
    	//Validate the form and check if it is submitted yet or not
    	$form -> handleRequest($request);
    	
    	//Check if this is NOT the inital request for this page (probably from the same page), 
    	//but the subsequent one, with valid POST-ed POST parameters from the above form
    	if ($form->isSubmitted() && $form->isValid()) {
    		
    		// $form->getData() holds the submitted values
    		$js = $form->getData();
    		
    		//Get the email
    		$email = $js -> getEmail();
    		
    		//Fetch the repository for entity JobSubmission
    		$repository = $this->getDoctrine()
    		->getRepository('PirateBundle:JobSubmission');
    		 
    		//Get all entities with that email
    		$jobs = $repository -> findByEmail($email);
    		
    		$detector_of_approval = false;
    		
    		//If we want to check only for jobs with this email that are actually approved (status=PUB), we would do it like this:
    		/*
    		foreach ($jobs as $job) {
    			if ($job -> getStatus() == "PUB") {
    				$detector_of_approval = true;
    				break;
    			}
    		}
    		*/
    		
    		//Checking if there is at least one job with this email, already submitted for approval somewhere int he past:
    		if (count($jobs) > 0) {
    			$detector_of_approval = true;
    		}
    		
    		//Persist the entity in any case, store it in database
    		$em = $this -> getDoctrine() -> getManager();
    		$em -> persist($js);
    		$em -> flush();
    		
    		if($detector_of_approval) {
    			echo "There is at least one job submission associated with this email.";
    			$js -> setStatus("PUB");
    		} else {
    			$js -> setStatus("PRI");
    			
    			echo "There are currently no job submissions associated with this email.";
    			
    			$messageToSubmitter = "Your job submission with title " . $js -> getTitle() . " is being moderated.";
    			
    			$approvalUrl = "http://localhost:8000/job/approve/" . $js -> getId();
    			$markAsSpamUrl = "http://localhost:8000/job/markspam/" . $js -> getId();
    			
    			$messageToModerator = "Hello, Your action is needed. There was a new job submission on the party of person who has never 
    					before submitted a job. The job title is: " . $js -> getTitle() . " and the job description is: " . $js -> getDescription() . ". 
    					Please either approve this job by going to this url: " . $approvalUrl . " or mark it as spam by
    					going to this url: " . $markAsSpamUrl . " . Thank you.";
    			
    			$this -> sendEmail($email, "Job submission moderation notification", $messageToSubmitter);
    			$this -> sendEmail("despotovic_vladimir@yahoo.ie", "Job submission moderation needed", $messageToModerator);
    			
    			
    		}
    		
    		//Change the status of the job submission
    		$em = $this -> getDoctrine() -> getManager();
    		$em -> persist($js);
    		$em -> flush();
    		
    		
    	    return new Response("The job ad has been submitted");
    	
    	} else {
    	
	    	//Render the form for the first time
	    	return $this->render('default/new.html.twig', array(
	    			'form' => $form->createView(),
	    	));
    	}
    }
    
    /**
     * @Route("/job/approve/{jobId}")
     *
     */
    public function approveJobSubmissionAction($jobId) {
    	
    	$repository = $this -> getDoctrine() -> getRepository('PirateBundle:JobSubmission');
    	 
    	$job = $repository -> findOneById($jobId);
    	 
    	//Check if the job with this id exists in the database
    	if(is_null($job)) {
    		echo "Job doesn't exist"; return new Response("The job with id " . $jobId . " doesn't exist");
    	} else {
    	
	    	$job -> setStatus("PUB");
	    	 
	    	$em = $this -> getDoctrine() -> getManager();
	    	$em -> persist($job);
	    	$em -> flush();
	    	 
	    	return new Response("<html><body> Job with id " . $jobId . " has been published </body></html>");
    	}
    	
    }
    
    /**
     * @Route("/job/markspam/{jobId}")
     *
     */
    public function markAsSpamJobSubmissionAction($jobId) {
    	 
    	$repository = $this -> getDoctrine() -> getRepository('PirateBundle:JobSubmission');
    	
    	$job = $repository -> findOneById($jobId);
    	
    	//Check if the job with this id exists in the database
    	if(is_null($job)) {
    		echo "Job doesn't exist"; return new Response("The job with id " . $jobId . " doesn't exist");
    	} else {
    	
	    	$job -> setStatus("SPA");
	    	
	    	$em = $this -> getDoctrine() -> getManager();
	    	$em -> persist($job);
	    	$em -> flush();
    	
    	    return new Response("<html><body> Job with id " . $jobId . " has been marked as spam </body></html>"); 
    	}
    }
    
    private function sendEmail($to, $subject, $body) {
    	//Delete this return when done with other things, not to waste emails
    	
    	
    	$sendgrid = new SendGrid("testerko", "abcdefgh2");
    	$email    = new SendGrid\Email();
    	
    	$email -> addTo($to)
    	-> setFrom("pirates@gmail.com")
    	-> setSubject($subject)
    	-> setHtml($body);
    	
    	//Send the confirmation notification email
    	$email_sending_result = $sendgrid -> send($email);
    	
    }
    
}

?>