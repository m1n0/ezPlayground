<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use eZ\Publish\API\Repository\Values\Content\Query;
use eZ\Publish\API\Repository\Values\Content\Query\Criterion;
use eZ\Publish\Core\MVC\Symfony\Controller\Controller;
use eZ\Publish\API\Repository\Values\Content\Query\SortClause;
use eZ\Publish\Core\Pagination\Pagerfanta\ContentSearchAdapter;
use Pagerfanta\Pagerfanta;
use Symfony\Component\HttpFoundation\Request;


class EventsController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('', array('name' => $name));
    }

    /**
     * @Template("content/view/full/inviqa_events.html.twig")
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     */
    public function getAllEventsAction(Request $request)
    {
        $query = new Query();
        $query->query = new Criterion\LogicalAnd(
          array(
            new Criterion\Visibility(Criterion\Visibility::VISIBLE),
            new Criterion\ContentTypeIdentifier(array('events'))
          )
        );
        $pager = new Pagerfanta(
          new ContentSearchAdapter($query, $this->getRepository()->getSearchService())
        );
        $limit = 10;
        $pager->setMaxPerPage($limit);
        $pager->setCurrentPage($request->get('page', 1));
        return $this->render(
          ':content/view/list:events.html.twig',
          array(
            'pagerEvents' => $pager
          )
        );
    }
}
