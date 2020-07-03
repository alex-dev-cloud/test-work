<?php


namespace AppBundle\Controller;


use AppBundle\Entity\Events;
use http\Env\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class EventsController extends Controller
{

    /**
     * @Route("/events", name="events")
     */
    public function indexAction(Request $request)
    {
        $events = $this->getDoctrine()->getRepository(Events::class)->findAll();
// $event = new Events();
// $event->setTitle('title');
// //...
//$em = $this->getDoctrine()->getManager();
//$em->persist($event);
//$em->flush();

        return $this->render('default/events.html.twig', ['events' => $events]);
    }

    /**
     * @Route("/events/{id}", name="event")
     */
    public function showEvent($id){
        $event = $this->getDoctrine()->getRepository(Events::class)->find($id);

        if (!$event) {
            throw $this->createNotFoundException('The event does not exist');
        }

        return new \Symfony\Component\HttpFoundation\Response(
            $this->render('default/event.html.twig', ['event' => $event])
            );
    }
}