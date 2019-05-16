<?php

namespace CakeDto\View;

use Cake\Core\Configure;
use Cake\Event\Event;
use Cake\Event\EventManager;
use Cake\Http\Response;
use Cake\Http\ServerRequest;
use Cake\View\ViewVarsTrait;

class Renderer {

	use ViewVarsTrait;

	/**
	 * Runs the template
	 *
	 * @param string $template Dto template to render
	 * @param array|null $vars Additional vars to set to template scope.
	 * @return string contents of generated code template
	 */
	public function generate($template, $vars = null) {
		$this->setGlobalConfiguration();

		if ($vars !== null) {
			$this->set($vars);
		}

		$view = $this->getView();
		$view->set($this->viewBuilder()->getVars());

		return $view->render($template);
	}

	/**
	 * Gets view instance.
	 *
	 * Use `CakeDto.initialize` event if you need to attach additional helpers.
	 *
	 * @return \Cake\View\View
	 * @triggers Bake.initialize $view
	 */
	public function getView() {
		$viewOptions = [
			'helpers' => [
				'CakeDto.Template',
			],
		];

		$view = new DtoView(new ServerRequest(), new Response(), null, $viewOptions);
		$event = new Event('CakeDto.initialize', $view);
		EventManager::instance()->dispatch($event);
		/** @var \CakeDto\View\DtoView $view */
		$view = $event->getSubject();

		return $view;
	}

	/**
	 * @return void
	 */
	protected function setGlobalConfiguration() {
		$strictTypes = (bool)Configure::read('CakeDto.strictTypes', version_compare(PHP_VERSION, '7.1') >= 0);
		$scalarTypeHints = (bool)Configure::read('CakeDto.scalarTypeHints', version_compare(PHP_VERSION, '7.1') >= 0);

		$this->set(compact('strictTypes', 'scalarTypeHints'));
	}

}
