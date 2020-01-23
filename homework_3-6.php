<?php
    $menu = ["File" => ["New file", "Open...", "Save"],
                "Edit" => ["Undo", "Cut", "Find"],
                "Selection" => ["Select all","Copy line up","Add cursor above"],
                "View" => ["Open view...","Explorer","Output"],
                "Go" => ["Switch editor", "Go to file...","Next problem"],
    ];
    $menuCode = "<ul>";
    foreach($menu as $item => $subItem){
        $menuCode .= "<li>$item";
        if(is_array($subItem)) {
            $menuCode .= "<ul>";
            foreach ($subItem as $subItemName => $subSubItem){
                $menuCode .= "<li>$subSubItem";
                $menuCode .= "</li>";
            }
            $menuCode .= "</ul>";
        }
    }
    $menuCode .= "</ul>";

    echo $menuCode;