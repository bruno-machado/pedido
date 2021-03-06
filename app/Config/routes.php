<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 * 
 * 
 */

//	Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'home'));
	Router::connect('/', array('controller' => 'cidades', 'action' =>  'index'));
	
	//Router::connect('/produtos/:slug', array('controller' => 'produtos', 'action' => 'view'), array('pass' => array('slug')));

	Router::connect('/brand/:slug', array('controller' => 'brands', 'action' => 'view'), array('pass' => array('slug')));

	Router::connect('/category/:slug', array('controller' => 'categories', 'action' => 'view'), array('pass' => array('slug')));

	Router::connect('/sitemap.xml', array('controller' => 'products', 'action' => 'sitemap'));

	Router::connect('/customer', array('controller' => 'users', 'action' => 'dashboard', 'customer' => true));
	
	Router::connect('/estabelecimentos/:id', array('controller' => 'estabelecimentos', 'action' => 'index')
	,array('pass' => array('id')));
	
	Router::connect('/produtos/:id', array('controller' => 'produtos', 'action' => 'index')
	,array('pass' => array('id')));
	
	Router::connect('/products/:id', array('controller' => 'products', 'action' => 'index')
	,array('pass' => array('id')));
        
	Router::connect('/fale-conosco', array('controller' => 'pages', 'action' => 'display', 'fale-conosco'));
	
	Router::connect('/quem-somos', array('controller' => 'pages', 'action' => 'display', 'quem-somos'));
	
/**
 * ...and connect the rest of 'Pages' controller's URLs.
 */
//	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));

/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
