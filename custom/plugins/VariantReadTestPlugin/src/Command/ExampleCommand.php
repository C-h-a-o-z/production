<?php declare(strict_types=1);

namespace VariantReadTestPlugin\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Shopware\Core\System\SystemConfig\SystemConfigService;

#[AsCommand(
    name: 'swag-commands:example',
    description: 'Add a short description for your command',
)]
class ExampleCommand extends Command
{
    private $systemConfigService;
    function __construct(SystemConfigService $systemConfigService, string $name = null)
    {
        parent::__construct($name);
        $this->systemConfigService = $systemConfigService;
    }
    // Provides a description, printed out in bin/console
    protected function configure(): void
    {
        $this->setDescription('Does something very special.');
    }

    // Actual code executed in the command
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        //$output->writeln('It works!');
        $output->writeln($this->systemConfigService->get('VariantReadTestPlugin.config.textField'));
        // Exit code 0 for success
        return 0;
    }
}
