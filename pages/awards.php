<?php
$pageTitle = "Awards - HOTA";
include_once('../includes/header.php');
?>
<section class="container">
    <h2>Awards</h2>
    <p>Last updated: <?= date('F j, Y'); ?></p>

    <p class="flow-text">HOTA offers a tiered award system based on the number of unique addresses activated or contacted. Each tier represents a different type of house, from a simple Cardboard Box to a luxurious Mansion.</p>

    <div class="card-panel blue-grey lighten-4 mb-4">
        <p><strong>How to earn awards:</strong> Upload your ADIF file containing ADDRESS fields for each contact. Our system will count your unique addresses and determine your award tier.</p>
        <a href="#upload" class="btn blue-grey waves-effect waves-light">Upload ADIF File</a>
    </div>

    <h3>Award Tiers</h3>

    <div class="row awards-grid">
        <?php
        // Get award tiers from config
        $tiers = ConfigManager::get('award_tiers');

        // Add default tiers if none in config
        if (empty($tiers)) {
            $tiers = [
                1000000 => "Mansion",
                500000 => "Victorian Villa",
                250000 => "Country Cottage",
                100000 => "Townhouse",
                10000 => "Detached House",
                1000 => "Semi-Detached House",
                500 => "Terraced House",
                100 => "Bedsit",
                0 => "Cardboard Box"
            ];
        }

        // Sort tiers by threshold in descending order
        krsort($tiers);

        // Define colors for each tier
        $tierColors = [
            "Mansion" => "deep-purple",
            "Victorian Villa" => "indigo",
            "Country Cottage" => "blue",
            "Townhouse" => "cyan",
            "Detached House" => "teal",
            "Semi-Detached House" => "green",
            "Terraced House" => "amber",
            "Bedsit" => "orange",
            "Cardboard Box" => "brown"
        ];

        // Display tiers
        foreach ($tiers as $threshold => $tierName) {
            $color = $tierColors[$tierName] ?? "blue-grey";
            ?>
            <div class="col s12 m6 l4">
                <div class="card award-card">
                    <div class="card-content <?php echo $color; ?> darken-1 white-text">
                        <span class="card-title"><?php echo $tierName; ?></span>
                        <h4><?php echo number_format($threshold); ?>+</h4>
                        <p>unique addresses</p>
                    </div>
                    <div class="card-action">
                        <a href="/#upload" class="btn-small <?php echo $color; ?> lighten-1 white-text waves-effect waves-light">Earn This Award</a>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>

    <h3 class="mt-5">How to Qualify</h3>
    <div class="row">
        <div class="col s12 m6">
            <div class="card-panel">
                <h4><i class="material-icons left">home</i> Activators</h4>
                <p>Operate from different house locations and log each activation with the address included in your ADIF file.</p>
                <ul class="browser-default">
                    <li>Each unique address counts as one point</li>
                    <li>Multiple activations from the same address count only once</li>
                    <li>Include complete address information in your logs</li>
                </ul>
            </div>
        </div>
        <div class="col s12 m6">
            <div class="card-panel">
                <h4><i class="material-icons left">settings_input_antenna</i> Chasers</h4>
                <p>Contact HOTA operators and log each contact with the station's address included in your ADIF file.</p>
                <ul class="browser-default">
                    <li>Each unique address counts as one point</li>
                    <li>Multiple contacts with the same address count only once</li>
                    <li>Ask for and record complete address information</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="card-panel blue-grey lighten-4 center-align">
        <h4>Ready to Check Your Award Status?</h4>
        <p>Upload your ADIF file to see which tier you qualify for and download your certificate.</p>
        <a href="#upload" class="btn-large orange darken-2 waves-effect waves-light">Upload ADIF File</a>
    </div>
</section>

<style>
.award-card {
    height: 100%;
    display: flex;
    flex-direction: column;
}

.award-card .card-content {
    flex-grow: 1;
    text-align: center;
    padding: 24px;
}

.award-card .card-content h4 {
    font-size: 2rem;
    margin: 1rem 0 0.5rem;
    color: white;
}

.award-card .card-action {
    display: flex;
    justify-content: center;
    padding: 16px;
}

.awards-grid {
    display: flex;
    flex-wrap: wrap;
}

.awards-grid > div {
    margin-bottom: 20px;
}
</style>

<?php include_once('../includes/footer.php'); ?>
