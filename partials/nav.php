<nav class="blue-grey lighten-4 center-align py-2">
    <div class="nav-wrapper" style="display: flex; flex-wrap: wrap; justify-content: center; background-color: inherit;">
        <?php
        $menuItems = [
            ['href' => '?page=about', 'text' => 'About'],
            ['href' => '?page=awards', 'text' => 'Awards'],
            ['href' => '?page=mailing-list', 'text' => 'Mailing List'],
            ['href' => '?page=nets', 'text' => 'Nets'],
            ['href' => '/#upload', 'text' => 'Upload Log'],
            ['href' => '?page=rules', 'text' => 'Rules'],
            ['href' => '?page=faq', 'text' => 'FAQ']
        ];

        foreach ($menuItems as $item) {
            echo '<a href="' . $item['href'] . '" class="black-text btn" style="margin: 5px;">' . $item['text'] . '</a>';
        }
        ?>
    </div>
</nav>
