<html>
<head>
    <meta charset="utf-8"/>
    <title>Menu Dropdown</title>
    <link rel="stylesheet" href="./php/array/style.css">
    <style> 
        *{
            margin: 0;
            padding: 0;
        }
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }

        li {
            float: left;
        }

        li a, .dropbtn {
            display: inline-block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover, .dropdown:hover .dropbtn {
            background-color: red;
        }

        li.dropdown {
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
        .action a{
            background: red;
        }
        .action {
            float: right;
        }

</style>
</head>
<body>
    <?php
    $menuArr = [
        [
            'title' => 'Home',
            'link' => '#',
            'class' => 'active',
        ],
        [
            'title' => 'News',
            'link' => '#',
            'class' => '',
        ],
        [
            'title' => 'Sản Phẩm',
            'link' => '#',
            'class' => '',
            'sub' => [
                [
                    'title' => 'Link 1',
                    'link' => '#'
                ],
                [
                    'title' => 'Link 2',
                    'link' => '#'
                ],
                [
                    'title' => 'Link 3',
                    'link' => '#'
                ]
            ]
        ],
        [
            'title' => 'Dịch vụ',
            'link' => '#',
            'class' => '',
            'sub' => [
                [
                    'title' => 'Link 1',
                    'link' => '#'
                ],
                [
                    'title' => 'Link 2',
                    'link' => '#'
                ],
                [
                    'title' => 'Link 3',
                    'link' => '#'
                ],
                [
                    'title' => 'Link 4',
                    'link' => '#'
                ]
            ]
        ],
        [
            'title' => 'Buy now',
            'link' => '#',
            'class' => 'action',
        ]
    ];
        // echo '<pre>';
        // print_r($menuArr);
        // echo '</pre>';
        if(!empty($menuArr)){
            echo '<ul>';
            foreach ($menuArr as $item) {
                $class = !empty($item['class'])?' class="'.$item['class'].'"':null;
                
                $class = !empty($item['sub'])?' class="dropdown"':$class;
                
                echo '<li'.$class.'><a href="'.$item['link'].'">'.$item['title'].'</a>';

                if (!empty($item['sub'])){
                    $subMenu = $item['sub'];
                    echo '<div class="dropdown-content">';
                    foreach ($subMenu as $sub){
                        echo '<a href="'.$sub['link'].'">'.$sub['title'].'</a>';
                    }
                    echo '</div>';
                }

                echo '</li>';
            }
            echo '</ul>';
        };

    ?>

    <?php
    $customerArr = [
        [
            'name' => 'Tuan Em ',
            'email' => '12132@gmail.com',
            'phone' => '1245787451',
            'address' => 'Ho Chi Minh'
        ],
        [
            'name' => 'Tuan Em 1 ',
            'email' => '121s32@gmail.com',
            'phone' => '12457812451',
            'address' => 'Ha Noi'
        ],
        [
            'name' => 'Tuan Em 2',
            'email' => '12132a@gmail.com',
            'phone' => '12457451',
            'address' => 'Long An'
        ],
        [
            'name' => 'Tuan Em 3',
            'email' => '1213c2@gmail.com',
            'phone' => '124451',
            'address' => 'Ho Chi Minh'
        ],
        [
            'name' => 'Tuan Em 4',
            'email' => '1213c2@gmail.com',
            'phone' => '124451',
            'address' => 'Ho Chi Minh'
        ],
        [
            'name' => 'Tuan Em 5',
            'email' => '12132a@gmail.com',
            'phone' => '12457451',
            'address' => 'Long An'
        ]
        ];

        // Kieerm tra trungf email thif xoas
    if (!empty($customerArr)){
        $indexDuplicate = [];
        for($i = 0; $i<count($customerArr) -1; $i++){
            for($j = $i+1; $j<count($customerArr); $j++){
                if($customerArr[$i]['email']==$customerArr[$j]['email']){
                    $indexDuplicate[] = $j;
                }
            }
        }

        if (!empty($indexDuplicate)){
            foreach ($indexDuplicate as $index) {
                if(isset($customerArr[$index])){
                    unset($customerArr[$index]);
                }
            }
        }
    }
        
    ?>
    <table width="100%" border= "1" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th width="5%">STT</th>
                <th>Ho ten</th>
                <th>Email</th>
                <th>SDT</th>
                <th>Dia chi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if(!empty($customerArr) && is_array($customerArr)):
                $count = 0;
                foreach ($customerArr as $item):
                    $count ++;

            ?>
        <tr>
                <td><?php echo $count; ?></td>
                <td><?php echo $item['name']; ?></td>
                <td><?php echo $item['email']; ?></td>
                <td><?php echo $item['phone']; ?></td>
                <td><?php echo $item['address']; ?></td>
            </tr>
        <?php endforeach; else: ?>   
        <tr>
            <td colspan="5" style="text-align: center">Empty</td>
        </tr>
        <?php endif; ?>
        </tbody>

    </table>

</body>
</html>