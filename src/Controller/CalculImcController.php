<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\UserRepository;
use Symfony\Component\Cache\Adapter\PdoAdapter;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

//$request = Request::createFromGlobals();
class CalculImcController extends AbstractController
{
    #[Route('/calcul/imc', name: 'calcul_imc')]
    public function index(UserRepository $userRepository, Request $request): Response
    {
        //die;
        var_dump($request->request->get("id"));die();
        //echo 'lol';
        //json_encode()
        //return $this->render('calcul_imc/index.html.twig', [
            //    'controller_name' => 'CalculImcController',
            //]);
            //die;
            if(strlen($request->getContent()) != 0){
                //var_dump($request->request->all());die();
                $data = $request->toarray();
                //$id=$data['id'];
                if(isset($id)){
                        //data['id'];
                        return new JsonResponse($userRepository->getImcandCateg($id));
                }
                //declanché error 401 si il n'est pas co
            }
        
        //var_dump($data);
        //die;
        return new JsonResponse(["message"=> "missing parameter"],400);
    }
}
