<!-- /about.php -->
<?php include 'includes/header.php'; ?>
<main>
    <h1>About Sachin Tendulkar</h1><hr>
    <h2><p>Just 15 when he stepped out on to the field to represent India, Sachin is today synonymous with everything Cricket. As a result of his exploits on the field, and conduct off the field, he transformed from cricketer to icon to role model for multiple generations; earning the moniker ‘Master Blaster’ at the age of just 24. Loved and adored by fans across the world from every community, age and gender, he was one of the first sportsmen to truly become a global Cricket sensation; someone who brought Cricket into the spotlight every time he took to the crease.</p></h2>
    <?php
    $team = [
        ["name" => "Athul pillai", "role" => "Vice President"],
        ["name" => "Dr. Anjali Tendulkar", "role" => "Co-Founder"],
        ["name" => "Minal Vaidya", "role" => "Head"],
    ];
    ?>
    <h2> Team Members of Sachin Tendulkar</h2>
    <ul>
        <?php foreach ($team as $member): ?>
            <li><?= $member['name'] ?> - <?= $member['role'] ?></li>
        <?php endforeach; ?>
    </ul>
</main>
<?php include 'includes/footer.php'; ?>
