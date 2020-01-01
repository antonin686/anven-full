<?php
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class MakeController extends Command
{
    protected $commandName = 'make:controller';
    protected $commandDescription = "Makes a controller";

    protected $commandArgumentName = "name";
    protected $commandArgumentDescription = " ";

    protected $commandOptionName = "cap"; // should be specified like "app:greet John --cap"
    protected $commandOptionDescription = 'If set, it will greet in uppercase letters';    

    protected function configure()
    {
        $this
            ->setName($this->commandName)
            ->setDescription($this->commandDescription)
            ->addArgument(
                $this->commandArgumentName,
                InputArgument::OPTIONAL,
                $this->commandArgumentDescription
            )
            ->addOption(
               $this->commandOptionName,
               null,
               InputOption::VALUE_NONE,
               $this->commandOptionDescription
            )
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $name = $input->getArgument($this->commandArgumentName);

        if ($name) {
            //$myfile = fopen("./app/controller/".$name.".php", "w"); 
            

            $fileContent = "<?php \r\n 
class {$name} extends Controller { \r\n
    function __construct() { \r\n
        parent::__construct(); \r\n 
    } \r\n 
}";

            $fileName = "{$name}.php";
            $filePath = "./app/controllers/".$fileName;

            if (file_put_contents($filePath, $fileContent) !== false) {
                $text = "Controller {$name} created";
            } else {
                echo "Cannot create the file (" . basename($filePath) . ").";
            }
        } else {
            $text = 'Hello';
        }

        if ($input->getOption($this->commandOptionName)) {
            $text = strtoupper($text);
        }

        $output->writeln($text);
    }
}