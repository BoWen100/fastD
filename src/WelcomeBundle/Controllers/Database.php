<?php
/**
 * Created by PhpStorm.
 * User: janhuang
 * Date: 16/5/7
 * Time: 下午11:58
 * Github: https://www.github.com/janhuang
 * Coding: https://www.coding.net/janhuang
 * SegmentFault: http://segmentfault.com/u/janhuang
 * Blog: http://segmentfault.com/blog/janhuang
 * Gmail: bboyjanhuang@gmail.com
 * WebSite: http://www.janhuang.me
 */

namespace WelcomeBundle\Controllers;

use FastD\Database\Query\Mysql;
use FastD\Framework\Bundle\Controllers\Controller;
use FastD\Http\Request;
use FastD\Http\Response;
use WelcomeBundle\Repository\TestRepository;

/**
 * Class Database
 *
 * @Route("/database")
 *
 * @package WelcomeBundle\Controllers
 */
class Database extends Controller
{
    /**
     * @Route("/driver", name="database.driver")
     *
     * @param Request $request
     * @return Response
     */
    public function databaseAction(Request $request)
    {
        $write = $this->getDriver('write');

        $result = $write->query('show tables')->execute()->getAll();

        $repository = new TestRepository($write);

        return $this->render('database/drivers.twig', [
            'result' => $result,
            'all' => $repository->findAll(),
        ]);
    }

    /**
     * @Route("/builder", name="database.builder")
     *
     * @return Response|string
     */
    public function queryBuilderAction()
    {
        $this->getDriver('read')->createQueryBuilder();

        return $this->render('database/drivers.twig', [
            'sql' => $sql,
        ]);
    }
}