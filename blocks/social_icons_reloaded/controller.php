<?php   
defined('C5_EXECUTE') or die(_("Access Denied."));

class SocialIconsReloadedBlockController extends BlockController {
	
	var $pobj;

	protected $btTable = 'btSocialIconsReloaded';
	protected $btInterfaceWidth = "550";
	protected $btInterfaceHeight = "500";
	protected $btWrapperClass = 'ccm-ui';
    
	public $aim = '';
	public $apple = '';
	public $bebo = '';
	public $blogger = '';
	public $cargo = '';
	public $delicious = '';
	public $designfloat = '';
	public $designmoo = '';
	public $deviantart = '';
	public $digg = '';
	public $dopplr = '';
	public $dribbble = '';
	public $email = '';
	public $ember = '';
	public $evernote = '';
	public $facebook = '';
	public $flickr = '';
	public $forrst = '';
	public $friendfeed = '';
	public $gamespot = '';
	public $google = '';
	public $google_plus = '';
    public $google_voice = '';
	public $googletalk = '';
	public $grooveshark = '';
	public $imdb = '';
	public $instagram = '';
	public $komodomedia_azure = '';
	public $lastfm = '';
	public $linkedin = '';
	public $mynameise = '';
	public $myspace = '';
	public $netvibes = '';
	public $newsvine = '';
	public $openid = '';
	public $orkut = '';
	public $pandora = '';
	public $paypal = '';
	public $picasa = '';
	public $pinterest = '';
    public $playstation = '';
	public $plurk = '';
	public $posterous = '';
	public $qik = '';
	public $rdio = '';
    public $readernaut = '';
	public $reddit = '';
	public $roboto = '';
	public $rss = '';
	public $sharethis = '';
	public $skype = '';
	public $slashdot = '';
    public $steam = '';
    public $stumbleupon = '';
	public $technorati = '';
	public $tumblr = '';
	public $twitter = '';
	public $viddler = '';
	public $vimeo = '';
	public $virb = '';
	public $windows = '';
	public $wordpress = '';
	public $xanga = '';
    public $xing = '';
	public $yahoo = '';
	public $yelp = '';
	public $youtube = '';
	public $zootool = '';
			
	/** 
	 * Used for localization. If we want to localize the name/description we have to include this
	 */
	public function getBlockTypeDescription() {
		return t("Displays social icons on your website");
	}
	
	public function getBlockTypeName() {
		return t("Social Icons Reloaded");
	}		
	
	
	public function __construct($obj = null) {
    		parent::__construct($obj);
	}

	public function on_start() {
        if(!$this->icon_alignment) {
            $this->icon_alignment='alignLeft';
        }
        if(!isset($this->use_large_icons)){
            $this->use_large_icons = 1;
		}
       	if(!isset($this->use_text)){
			$this->use_text = 1;
		}
		if(!isset($this->open_new_page)){
			$this->open_new_page = 1;
		}
	  }

	public function view() {
		if($this->use_large_icons){
			$this->set('large', TRUE);
		}
       	if($this->use_text){
			$this->set('text', TRUE);
		}
		if($this->open_new_page){
			$this->set('blank', TRUE);
		}

        if($this->icon_alignment=='alignRight' ){
			$this->set('right', TRUE);
		}

		$profiles = array(
						'email'					=> $this->email,
						'rss'					=> $this->rss,
                        'aim' 					=> $this->aim,
						'apple'					=> $this->apple,
						'bebo'					=> $this->bebo,
						'blogger'				=> $this->blogger,
						'cargo'					=> $this->cargo,
						'delicious'				=> $this->delicious,
						'designfloat'			=> $this->designfloat,
						'designmoo'				=> $this->designmoo,
						'deviantart'			=> $this->deviantart,
						'digg'					=> $this->digg,
						'dopplr'				=> $this->dopplr,
						'dribbble'				=> $this->dribbble,
						'ember'					=> $this->ember,
						'evernote'				=> $this->evernote,
						'facebook'				=> $this->facebook,
						'flickr'				=> $this->flickr,
						'forrst'				=> $this->forrst,
						'friendfeed'			=> $this->friendfeed,
						'gamespot'				=> $this->gamespot,
						'google'				=> $this->google,
						'google_plus'			=> $this->google_plus,
                        'google_voice'			=> $this->google_voice,
						'googletalk'			=> $this->googletalk,
						'grooveshark'			=> $this->grooveshark,
						'imdb'					=> $this->imdb,
						'instagram'				=> $this->instagram,
						'komodomedia_azure'		=> $this->komodomedia_azure,
						'komodomedia_wood'		=> $this->komodomedia_wood,				
						'lastfm'				=> $this->lastfm,
						'linkedin'				=> $this->linkedin,
						'mynameise'				=> $this->mynameise,
						'myspace'				=> $this->myspace,
						'netvibes'				=> $this->netvibes,
						'newsvine'				=> $this->newsvine,
						'openid'				=> $this->openid,
						'orkut'					=> $this->orkut,
						'pandora'				=> $this->pandora,
						'paypal'				=> $this->paypal,
						'picasa'				=> $this->picasa,
						'pinterest'				=> $this->pinterest,
                        'playstation'			=> $this->playstation,
						'plurk'					=> $this->plurk,
						'posterous'				=> $this->posterous,
						'qik'					=> $this->qik,
						'rdio'				    => $this->rdio,
                        'readernaut'			=> $this->readernaut,
						'reddit'				=> $this->reddit,
						'roboto'				=> $this->roboto,
                        'sharethis'				=> $this->sharethis,
						'skype'					=> $this->skype,
						'slashdot'				=> $this->slashdot,
                        'steam'			     	=> $this->steam,
                        'stumbleupon'			=> $this->stumbleupon,
						'technorati'			=> $this->technorati,
						'tumblr'				=> $this->tumblr,
						'twitter'				=> $this->twitter,
						'viddler'				=> $this->viddler,
						'vimeo'					=> $this->vimeo,
						'virb'					=> $this->virb,
						'windows'				=> $this->windows,
						'wordpress'				=> $this->wordpress,
						'xanga'					=> $this->xanga,
                        'xing'					=> $this->xing,
						'yahoo'					=> $this->yahoo,
						'yelp'					=> $this->yelp,
						'youtube'				=> $this->youtube,
						'zootool'				=> $this->zootool			
					);
					
		$this->set('profiles', $profiles);				
	}
	
	/*
	 * save block config
	 */ 
	public function save($data) {
		$args['use_large_icons'] = intval($data['use_large_icons']) ;
		$args['use_text'] = intval($data['use_text']) ;
        $args['open_new_page'] = intval($data['open_new_page']) ;
        $args['icon_alignment'] = isset($data['icon_alignment']) ? trim($data['icon_alignment']) : 'alignLeft';
        $args['aim'] = isset($data['aim']) ? $data['aim'] : '';
		$args['apple'] = isset($data['apple']) ? $data['apple'] : '';
		$args['bebo'] = isset($data['bebo']) ? $data['bebo'] : '';
		$args['blogger'] = isset($data['blogger']) ? $data['blogger'] : '';
		$args['brightkite'] = isset($data['brightkite']) ? $data['brightkite'] : '';
		$args['cargo'] = isset($data['cargo']) ? $data['cargo'] : ''; 
		$args['delicious'] = isset($data['delicious']) ? $data['delicious'] : '';
		$args['designfloat'] = isset($data['designfloat']) ? $data['designfloat'] : '';
		$args['designmoo'] = isset($data['designmoo']) ? $data['designmoo'] : '';
		$args['deviantart'] = isset($data['deviantart']) ? $data['deviantart'] : ''; 
		$args['digg'] = isset($data['digg']) ? $data['digg'] : '';
		$args['dopplr'] = isset($data['dopplr']) ? $data['dopplr'] : '';
		$args['dribbble'] = isset($data['dribbble']) ? $data['dribbble'] : '';
		$args['email'] = isset($data['email']) ? $data['email'] : '';
		$args['ember'] = isset($data['ember']) ? $data['ember'] : '';
		$args['evernote'] = isset($data['evernote']) ? $data['evernote'] : '';
		$args['facebook'] = isset($data['facebook']) ? $data['facebook'] : '';
		$args['flickr'] = isset($data['flickr']) ? $data['flickr'] : '';
		$args['forrst'] = isset($data['forrst']) ? $data['forrst'] : '';
		$args['friendfeed'] = isset($data['friendfeed']) ? $data['friendfeed'] : '';
		$args['gamespot'] = isset($data['gamespot']) ? $data['gamespot'] : '';
		$args['google'] = isset($data['google']) ? $data['google'] : '';
		$args['google_plus'] = isset($data['google_plus']) ? $data['google_plus'] : '';
        $args['google_voice'] = isset($data['google_voice']) ? $data['google_voice'] : '';
		$args['google_wave'] = isset($data['google_wave']) ? $data['google_wave'] : '';
		$args['googletalk'] = isset($data['googletalk']) ? $data['googletalk'] : '';
		$args['gowalla'] = isset($data['gowalla']) ? $data['gowalla'] : '';
		$args['grooveshark'] = isset($data['grooveshark']) ? $data['grooveshark'] : '';
		$args['ilike'] = isset($data['ilike']) ? $data['ilike'] : '';
		$args['imdb'] = isset($data['imdb']) ? $data['imdb'] : '';
		$args['instagram'] = isset($data['instagram']) ? $data['instagram'] : '';
		$args['komodomedia_azure'] = isset($data['komodomedia_azure']) ? $data['komodomedia_azure'] : '';
		$args['komodomedia_wood'] = isset($data['komodomedia_wood']) ? $data['komodomedia_wood'] : '';
		$args['lastfm'] = isset($data['lastfm']) ? $data['lastfm'] : '';
		$args['linkedin'] = isset($data['linkedin']) ? $data['linkedin'] : '';
		$args['mixx'] = isset($data['mixx']) ? $data['mixx'] : '';
		$args['mobileme'] = isset($data['mobileme']) ? $data['mobileme'] : '';
		$args['mynameise'] = isset($data['mynameise']) ? $data['mynameise'] : '';
		$args['myspace'] = isset($data['myspace']) ? $data['myspace'] : '';
		$args['netvibes'] = isset($data['netvibes']) ? $data['netvibes'] : '';
		$args['newsvine'] = isset($data['newsvine']) ? $data['newsvine'] : '';
		$args['openid'] = isset($data['openid']) ? $data['openid'] : '';
		$args['orkut'] = isset($data['orkut']) ? $data['orkut'] : '';
		$args['pandora'] = isset($data['pandora']) ? $data['pandora'] : '';
		$args['paypal'] = isset($data['paypal']) ? $data['paypal'] : '';
		$args['picasa'] = isset($data['picasa']) ? $data['picasa'] : '';
		$args['pinterest'] = isset($data['pinterest']) ? $data['pinterest'] : '';
        $args['playstation'] = isset($data['playstation']) ? $data['playstation'] : '';
		$args['plurk'] = isset($data['plurk']) ? $data['plurk'] : '';
		$args['posterous'] = isset($data['posterous']) ? $data['posterous'] : '';
		$args['qik'] = isset($data['qik']) ? $data['qik'] : '';
		$args['rdio'] = isset($data['rdio']) ? $data['rdio'] : '';
        $args['readernaut'] = isset($data['readernaut']) ? $data['readernaut'] : '';
		$args['reddit'] = isset($data['reddit']) ? $data['reddit'] : '';
		$args['roboto'] = isset($data['roboto']) ? $data['roboto'] : '';
		$args['rss'] = isset($data['rss']) ? $data['rss'] : '';
		$args['sharethis'] = isset($data['sharethis']) ? $data['sharethis'] : '';
		$args['skype'] = isset($data['skype']) ? $data['skype'] : '';
		$args['slashdot'] = isset($data['slashdot']) ? $data['slashdot'] : '';
        $args['steam'] = isset($data['steam']) ? $data['steam'] : '';
        $args['stumbleupon'] = isset($data['stumbleupon']) ? $data['stumbleupon'] : '';
		$args['technorati'] = isset($data['technorati']) ? $data['technorati'] : '';
		$args['tumblr'] = isset($data['tumblr']) ? $data['tumblr'] : '';
		$args['twitter'] = isset($data['twitter']) ? $data['twitter'] : '';
		$args['viddler'] = isset($data['viddler']) ? $data['viddler'] : '';
		$args['vimeo'] = isset($data['vimeo']) ? $data['vimeo'] : '';
		$args['virb'] = isset($data['virb']) ? $data['virb'] : '';
		$args['windows'] = isset($data['windows']) ? $data['windows'] : '';
		$args['wordpress'] = isset($data['wordpress']) ? $data['wordpress'] : '';
		$args['xanga'] = isset($data['xanga']) ? $data['xanga'] : '';
        $args['xing'] = isset($data['xing']) ? $data['xing'] : '';
		$args['yahoo'] = isset($data['yahoo']) ? $data['yahoo'] : '';
		$args['yahoobuzz'] = isset($data['yahoobuzz']) ? $data['yahoobuzz'] : '';
		$args['yelp'] = isset($data['yelp']) ? $data['yelp'] : '';
		$args['youtube'] = isset($data['youtube']) ? $data['youtube'] : '';
		$args['zootool'] = isset($data['zootool']) ? $data['zootool'] : '';
		parent::save($args);
	}		
}

?>