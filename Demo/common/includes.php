<?php   date_default_timezone_set('Asia/Kolkata');

session_start();

class Includes {

	public function __construct() {
		$this->base = (in_array($_SERVER['SERVER_NAME'], array('www.gatemanindia.in', 'gatemanindia.in')) ? '' : 'autogates.loc/demo');
		$this->form_token =	$this->randval(64);
	}

	public function base_url($arg = NULL) {
        // return (isset($_SERVER['HTTPS']) ? 'https://' : 'http://').$_SERVER['HTTP_HOST']."/".$this->base.(!is_null($arg) ? $arg : "");
        return (isset($_SERVER['HTTPS']) ? 'https://' : 'http://').$this->base.(!is_null($arg) ? $arg : "");
    }

	public function base_dir($arg = NULL) {	return $_SERVER['DOCUMENT_ROOT']."/".$this->base.(!is_null($arg) ? $arg : "");	}

	public function current_url($qs = TRUE) {	return (isset($_SERVER['HTTPS']) ? 'https://' : 'http://').$_SERVER['HTTP_HOST'].($qs ? $_SERVER['REQUEST_URI'] : $_SERVER['PHP_SELF']);	}

	public function stylesheet() { ?>
		<?php /*<base href="<?php echo $this->base_url(); ?>" />*/ ?>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Spinet Group">
        <meta name="generator" content="Astro v5.13.2">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/fontawesome.min.css">
        <style>
            main {
                margin-top: 55px;
            }
        </style>
	<?php }

	public function javascript() { ?>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
	<?php }

	public function topheader($menu = []) {
        $menu = ['first' => (array_key_exists('first', $menu) && !is_null($menu['first']) && !empty($menu['first']) ? $menu['first'] : NULL),
                 'second' => (array_key_exists('second', $menu) && !is_null($menu['second']) && !empty($menu['second']) ? $menu['second'] : NULL)];
        ?>
		<nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top" aria-label="Offcanvas navbar large">
            <div class="container">
                <a class="navbar-brand fs-5 fw-bold fst-italic" href="#">GateMan India</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbar2Label">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title fs-5 fw-bold fst-italic" id="offcanvasNavbar2Label">GateMan India</h5> <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3 fw-medium">
                            <li class="nav-item">
                                <a href="<?php echo $this->base_url(); ?>" class="nav-link <?php echo ($menu['first'] == 'home') ? ' fw-bold active' : ''; ?>" aria-current="home"><i class="fa-solid fa-house"></i> Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo $this->base_url(); ?>/about.php" class="nav-link <?php echo ($menu['first'] == 'about') ? ' fw-bold active' : ''; ?>" aria-current="about"><i class="fa-solid fa-address-card"></i> About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo $this->base_url(); ?>/services.php" class="nav-link <?php echo ($menu['first'] == 'services') ? ' fw-bold active' : ''; ?>"><i class="fa-solid fa-hand-holding"></i> Services</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle <?php echo ($menu['first'] == 'product') ? ' fw-bold active' : ''; ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <i class="fa-solid fa-dungeon"></i> Products</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" class="dropdown-item">Swing Gates</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a href="#" class="dropdown-item">Sliding Gates</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a href="#" class="dropdown-item">Boom Barrier</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo $this->base_url(); ?>/contact.php" class="nav-link <?php echo ($menu['first'] == 'contact') ? ' fw-bold active' : ''; ?>"><i class="fa-solid fa-envelopes-bulk"></i> Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
	<?php }

	public function footer(){ ?>
		<footer class="text-bg-dark">
            <div class="container">
                <footer class="row pt-5 pb-3 border-top">
                    <div class="col">
                        <p><a href="/" class="d-flex align-items-center mb-3  text-bg-dark text-decoration-none" aria-label="Bootstrap">GateMan India</a></p>
                        <p class="text-bg-dark">&copy; 2025</p>
                    </div>
                    <div class="col"></div>
                    <div class="col">
                        <h5>Section</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-bg-dark">Home</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-bg-dark">Features</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-bg-dark">Pricing</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-bg-dark">FAQs</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-bg-dark">About</a></li>
                        </ul>
                    </div>
                    <div class="col">
                        <h5>Section</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-bg-dark">Home</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-bg-dark">Features</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-bg-dark">Pricing</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-bg-dark">FAQs</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-bg-dark">About</a></li>
                        </ul>
                    </div>
                    <div class="col">
                        <h5>Section</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-bg-dark">Home</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-bg-dark">Features</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-bg-dark">Pricing</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-bg-dark">FAQs</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-bg-dark">About</a></li>
                        </ul>
                    </div>
                </footer>
            </div>
            <hr class="my-0">
            <div class="container">
                <footer class="d-flex flex-wrap justify-content-sm-between align-items-center py-3">
                    <div class="col-md-4 d-flex align-items-center">
                        <a href="/" class="mb-3 me-2 mb-md-0 text-bg-dark text-decoration-none lh-1" aria-label="Bootstrap">GateMan India Icon</a>
                        <span class="mb-3 mb-md-0 text-bg-dark">&copy; 2025 GateMan India</span>
                    </div>
                    <ul class="nav col-md-4 justify-content-sm-end list-unstyled d-flex">
                        <li class="ms-3"><a class="text-bg-dark" href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a></li>
                        <li class="ms-3"><a class="text-bg-dark" href="#" aria-label="Facebook"><i class="fa-brands fa-facebook"></i></a></li>
                    </ul>
                </footer>
            </div>
        </footer>
	<?php }

	public function randval($len = 16) {	$ff = "";
		$char = array('A','a','B','b','C','c','D','d','E','e','F','f','G','g','H','h','I','i','J','j','K','k','L','l','M','m','N','n','O','o','P','p','Q','q','R','r','S','s','T','t','U','u','V','v','W','w','X','x','Y','y','Z','z','1','2','3','4','5','6','7','8','9','0');
		for($i=0; $i<=$len;$i++) { $ff .= $char[rand(1, 62)-1]; }
		return $ff;
	}
}
$inc = new Includes();	?>