<?php

namespace CakeDto\Command;

use Cake\Command\Command;
use Cake\Console\Arguments;
use Cake\Console\ConsoleIo;
use Cake\Console\ConsoleOptionParser;
use Cake\Core\Plugin;

class DtoInitCommand extends Command {

	/**
	 * @var int
	 */
	public const CODE_CHANGES = 2;

	/**
	 * E.g.:
	 * bin/cake upgrade /path/to/app --level=cakephp40
	 *
	 * @param \Cake\Console\Arguments $args The command arguments.
	 * @param \Cake\Console\ConsoleIo $io The console io
	 *
	 * @throws \Cake\Console\Exception\StopException
	 * @return int|null|void The exit code or null for success
	 */
	public function execute(Arguments $args, ConsoleIo $io) {
		$path = $this->_getConfigPath($args);
		$io->out('Creating file in ' . $path, 1, ConsoleIo::VERBOSE);

		$name = $args->getArgumentAt(0);
		if ($name) {
			if (!is_dir($path . 'dto')) {
				mkdir($path . 'dto', 0700, true);
			}
			$file = 'dto' . DS . $name . '.dto.xml';
		} else {
			$file = 'dto.xml';
		}

		if (file_exists($path . $file)) {
			$io->error('File already exists: ' . $file);
			$this->abort();
		}

		$content = file_get_contents(Plugin::path('CakeDto') . 'files' . DS . 'dto.xml');

		file_put_contents($path . $file, $content);
		$io->out('File generated: ' . $file);
	}

	/**
	 * @param \Cake\Console\Arguments $args
	 *
	 * @return string
	 */
	protected function _getConfigPath(Arguments $args): string {
		if ($args->getOption('plugin')) {
			$path = Plugin::path((string)$args->getOption('plugin'));

			return $path . 'config' . DS;
		}

		if (defined('CONFIG')) {
			return CONFIG;
		}

		return ROOT . DS . 'config' . DS;
	}

	/**
	 * @param \Cake\Console\ConsoleOptionParser $parser The parser to be defined
	 *
	 * @return \Cake\Console\ConsoleOptionParser The built parser.
	 */
	protected function buildOptionParser(ConsoleOptionParser $parser): ConsoleOptionParser {
		$options = [
			'plugin' => [
				'short' => 'p',
				'help' => 'The plugin to run it for. Defaults to the application otherwise.',
			],
		];

		return parent::getOptionParser()
			->setDescription('Create a new file to start from in your /config dir.')
			->addOptions($options);
	}

}