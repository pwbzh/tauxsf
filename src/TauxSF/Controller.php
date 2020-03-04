<?php

namespace TauxSF;

class Controller
{
    public function home(): void
    {
        // Default input
        $children = 7;
        $more14 = false;

        // Form request
        if (isset($_GET['search'])
            && is_numeric($_GET['search'])
            && (int) $_GET['search'] > 6
        ) {
            $children = (int) strip_tags($_GET['search']);
        }

        if (isset($_GET['more-14'])
            && on == $_GET['more-14']
        ) {
            $more14 = true;
        }

        $model = new Model();
        $supervisionRate = $model->getSupervisionRate($children, $more14);

        // JSON view
        if (isset($_GET['output']) && $_GET['output'] == 'json') {
            header('Content-Type: application/json');
            echo json_encode($supervisionRate, JSON_PRETTY_PRINT);
            return;
        }

        $view = new View();
        $view->set('children', $children);
        $view->set('more14', $more14);
        $view->set('supervision_rate', $supervisionRate);
        $view->render('home.php');
    }
}
