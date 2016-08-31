<?php 

namespace PirateBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class JobController
{
    /**
     * @Route("/job/submit")
     */
    public function submitAction()
    {
        
    	
        return new Response(
            '<html><body>Submit job on this page</body></html>'
        );
        
        
        
    }
}

?>