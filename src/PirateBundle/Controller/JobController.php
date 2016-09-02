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
    	$repository = $this->getDoctrine()
    	->getRepository('PirateBundle:JobSubmission');
    	
    	$jobs = $repository->findByEmail("ja@ja.com");
    	
    	print "<pre>"; print_r($jobs); print "</pre>";
    	
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
    	
    	//Check if this is infact not the inital request for this page (probably from the same page), 
    	//but the subsequent one, with POST-ed POST parameters from the above form
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
    		foreach ($jobs as $job) {
    			if ($job -> getStatus() == "PUB") {
    				$detector_of_approval = true;
    				break;
    			}
    		}
    		
    		//print "<pre>"; print_r($jobs); print "</pre>";
    		
    		if($detector_of_approval) {
    			echo "There is at least one approved job submission associated with this email.";
    			$js -> setStatus("PUB");
    		} else {
    			echo "There are currently no approved job submissions associated with this email.";
    			$this -> sendEmailUsingSendgridApi($email, "Job submission moderation", "Your job submission is being moderated");
    			$js -> setStatus("PRI");
    		}
    		
    		//Persist the entity
    		$em = $this -> getDoctrine() -> getManager();
    		$em -> persist($js);
    		$em -> flush();
    		
    		
    		
    	    return new Response("New job submitted");
    	
    	} else {
    	
	    	//Render the form for the first time
	    	return $this->render('default/new.html.twig', array(
	    			'form' => $form->createView(),
	    	));
    	}
    }
    
    private function sendEmailUsingSendgridApi($to, $subject, $body) {
    	//Delete this return when done with other things, not to waste emails
    	return;
    	
    	$sendgrid = new SendGrid("testerko", "abcdefgh2");
    	$email    = new SendGrid\Email();
    	
    	$email -> addTo("despotovic_vladimir@yahoo.ie")
    	-> setFrom("pirates@gmail.com")
    	-> setSubject($subject)
    	-> setHtml($body);
    	
    	//Send the confirmation notification email
    	$email_sending_result = $sendgrid -> send($email);
    	
    }
}

?>