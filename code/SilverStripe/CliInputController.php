<?php
/**
 * This file is part of the Heystack package
 *
 * @package Heystack
 */

/**
 *
 */
use Heystack\Subsystem\Core\ServiceStore;

/**
 *
 * @copyright  Heyday
 * @author Stevie Mayhew <stevie@heyday.co.nz>
 * @author Cameron Spiers <cam@heyday.co.nz>
 * @package Heystack
 *
 */
class CliInputController extends Controller
{

    public static $url_segment = 'heystack/cli/input';

    private $inputHandlerService;

    public static $allowed_actions = array(
        'process'
    );

    /**
     * Setup this controller.
     */
    public function __construct()
    {

        parent::__construct();

        $this->inputHandlerService = ServiceStore::getService('cli_input_processor_handler');

    }

    public function init()
    {

        parent::init();

        // Unless called from the command line, all CliControllers need ADMIN privileges
        if (!Director::is_cli() && !Permission::check("ADMIN")) {

            return Security::permissionFailure();

        }

    }

    /**
     * Process the request to the controller and direct it to the correct input
     * and output controllers via the input and output processor services.
     *
     * @return mixed
     */
    public function process()
    {

        $request = $this->getRequest();
 
        return $this->inputHandlerService->process($request->param('Processor'), $request);

    }

}