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
    	
    	//\Doctrine\Common\Util\Debug::dump($repository);
    	
    	$job = $repository->findOneByEmail("ja@ja.com");
    	
    	print "<pre>"; print_r($job); print "</pre>";
    	
    	return new Response("<html><body> hey </body></html>");
    	
    	
    	
    }
    
    /**
     * @Route("/job/new")
     * 
     */
    public function newAction(Request $request)
    {
    	
    	$jobSubmission = new JobSubmission();
    	$jobSubmission->setTitle('Write a title here');
    	$jobSubmission->setDescription('Write a description here');
    	$jobSubmission->setStatus('QUO');
    
    	$form = $this->createFormBuilder($jobSubmission)
    	->add('title', TextType::class)
    	->add('description', TextType::class)
    	->add('email', TextType::class)
    	->add('status', HiddenType::class)
    	->add('save', SubmitType::class, array('label' => 'Submit the job ad'))
    	->getForm();
    
    	$form -> handleRequest($request);
    	
    	//This is the second request, with POST parameters
    	if ($form->isSubmitted() && $form->isValid()) {
    		// $form->getData() holds the submitted values
    		// but, the original `$task` variable has also been updated
    		$js = $form->getData();
    	
    		print "<pre>"; print_r($js); print "</pre>";
    		
    		$em = $this -> getDoctrine() -> getManager();
    		$em -> persist($js);
    		$em -> flush();
    		
    		//$this -> sendEmail("despotovic_vladimir@yahoo.ie", "testing from my symfony");
    		
    		$this -> sendEmailUsingSendgridApi("despotovic_vladimir@yahoo.ie", "testing");
    		
    	    return new Response("New job submitted");
    	
    	}
    	
    	//Render the form in any case
    	return $this->render('default/new.html.twig', array(
    			'form' => $form->createView(),
    	));
    }
    
    
    
    public function sendEmail($email, $title) {
    	
		$message = \Swift_Message::newInstance()
		  ->setFrom('pirates@gmail.com')
		  ->setTo($email)
		  ->setSubject('Job submission')
		  ->setBody("Job ad with title " . $title . " has been submitted and waiting for approval.");
		
		$this->get('mailer')->send($message);
    	
    	
    }
    
    private function sendEmailUsingSendgridApi($to, $title) {
    	$sendgrid = new SendGrid("testerko", "abcdefgh2");
    	$email    = new SendGrid\Email();
    	
    	$email -> addTo("despotovic_vladimir@yahoo.ie")
    	-> setFrom("pirates@gmail.com")
    	-> setSubject("Job submission")
    	-> setHtml("Job has been submitted.");
    	
    	//Send the confirmation notification email
    	$email_sending_result = $sendgrid -> send($email);
    	
    }
}

?>