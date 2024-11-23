<?php 
include 'menu.php'; 


class Brand {
    private $brands = [
        [
            'name' => 'AORUS',
            'url' => 'https://www.aorus.com',
        ],
        [
            'name' => 'ASUS',
            'url' => 'https://www.asus.com',
        ],
        [
            'name' => 'ASRock',
            'url' => 'https://www.asrock.com',
        ],
        [
            'name' => 'MSI',
            'url' => 'https://www.msi.com',
        ]
    ];


    public function getRandomBrandUrl() {
        $randomIndex = array_rand($this->brands);
        return $this->brands[$randomIndex]['url'];
    }
}


$brand = new Brand();
$randomBrandUrl = $brand->getRandomBrandUrl();
?>

<div class="wrapper page">
    <section id="Brand">
        <link rel="stylesheet" href="style.css">
        
        <h2>Brand Partners</h2>
        <p>Anda dapat mempercayai brand berikut:</p>
        <div class="brand-container">
            <a href="https://www.aorus.com" target="_blank" rel="noopener noreferrer">
                <img src="https://i.pinimg.com/736x/77/0b/68/770b682aedb8358677af571bf7430103.jpg" alt="AORUS" class="brand-logo">
            </a>
            <a href="https://www.asus.com" target="_blank" rel="noopener noreferrer">
                <img src="https://i.pinimg.com/736x/62/35/1e/62351ef1a56fac4bec2d17833952a526.jpg" alt="ASUS" class="brand-logo">
            </a>
            <a href="https://www.asrock.com" target="_blank" rel="noopener noreferrer">
                <img src="https://i.pinimg.com/736x/c1/99/32/c1993251f82d4fb6368d9afe72ecab51.jpg" alt="ASRock" class="brand-logo">
            </a>
            <a href="https://www.msi.com" target="_blank" rel="noopener noreferrer">
                <img src="https://i.pinimg.com/736x/74/61/a9/7461a99763fbf2f4ac315f5e395da607.jpg" alt="MSI" class="brand-logo">
            </a>
        </div>

        <!-- Tombol untuk menuju link brand secara acak -->
        <div class="random-brand-button">
            <a href="<?php echo $randomBrandUrl; ?>" target="_blank" class="button">
                <p>
                Kunjungi Brand Secara Acak
                </p>
            </a>
        </div>
    </section>
</div>

<?php include 'footer.php'; ?>
