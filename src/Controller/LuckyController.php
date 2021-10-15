<?php
    namespace App\Controller;

    
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;     

    class LuckyController extends AbstractController
    {
        // public function number($data)
        // {
        //     $number = random_int(0, 100);
    
        //     return new Response(
        //         '<html><body>Lucky number: '.$data.'</body></html>'
        //     );
        // }


        /**
        * @Route("/lucky/number/{data}")
        */
        public function number($data)
        {
            $number = random_int(0, 100);
    
            return new Response(
                '<html><body>Lucky number: ANNOATİON '.$data.'</body></html>'
            );
        }

        /**
        * @Route("/lucky/numbertwo/")
        */
        public function numbertwo()
        {
            $number = random_int(0, 100);
    
            return new Response(
                '<html><body>Lucky number: ANNOATİON '.$number.'</body></html>'
            );
        }





        public function ynumber($data)
        {
            $number = random_int(0, 100);
    
            return new Response(
                '<html><body>Lucky number: YAML '.$data.'</body></html>'
            );
        }

        public function ynumbertwo()
        {
            $number = random_int(0, 100);
    
            return new Response(
                '<html><body>Lucky number: YAML '.$number.'</body></html>'
            );
        }


    }

?>