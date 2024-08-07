<?php
session_start();
if ($_SESSION['user']['current_level']<2){
  header('Location:  ../../learn.php?msg1=user_level_error');

} ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Μεσαίο επίπεδο μάθησης</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <link rel="icon" href="../../ico.png">

    <meta
      name="author"
      content="Mark Otto, Jacob Thornton, and Bootstrap contributors"
    />
    <meta name="generator" content="Hugo 0.122.0" />
    <script src="../../js/jquery-3.7.1.min.js"></script>
    <script src="../../../assets/js/color-modes.js"></script>
    <link
      rel="canonical"
      href="https://getbootstrap.com/docs/5.3/examples/sidebars/"
    />
    <link href="../../../assets/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="../../../assets/dist/js/bootstrap.bundle.min.js"></script>

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@docsearch/css@3"
    />
    <style>
	  header {
		background-image: url('../../img/yellow.jpg');
	  }
  </style>	
  </head>
  <body data-spy="scroll" data-target="#navbar-example3" data-offset="20">
    <div class="container-fluid">
      <div class="row">
        <header class="py-3 mb-3 fixed-top">
          <div class="container-fluid d-flex justify-content-between align-items-center">
            <span class="fs-4">Μεσαίο επίπεδο quiz</span>
            <div>
              <a href="../../learn.php"><button type="button" class="btn btn-outline-dark float-right">Επιστροφή</button></a>
            </div>
          </div>
        </header>
      </div>
      <div class="row">
        <div class="col-sm-2 navbar-fixed-top position-fixed" style="margin-top: 75px;">
        <nav
          id="navbar-example3"
          class="navbar navbar-light bg-light flex-column align-items-stretch p-3 navbar-fixed-top"
        >
          <a class="navbar-brand" href="#">ΠΕΡΙΕΧΟΜΕΝΑ</a>
          <nav class="nav nav-pills flex-column">
            <a class="nav-link" href="#item-1">Κεφάλαιο 5</a>
            <nav class="nav nav-pills flex-column">
              <a class="nav-link ms-3 my-1" href="#item-1-1">Ενότητα 5.1</a>
            </nav>
            <a class="nav-link" href="#item-2">Κεφάλαιο 6</a>
            <nav class="nav nav-pills flex-column">
              <a class="nav-link ms-3 my-1" href="#item-1-1">Ενότητα 6.1</a>
              <a class="nav-link ms-3 my-1" href="#item-1-2">Ενότητα 6.2</a>
            </nav>
            <a class="nav-link" href="#item-3">Κεφάλαιο 7</a>
            <nav class="nav nav-pills flex-column">
              <a class="nav-link ms-3 my-1" href="#item-3-1">Ενότητα 7.1</a>
              <a class="nav-link ms-3 my-1" href="#item-3-2">Ενότητα 7.2</a>
            </nav>

            <a class="nav-link" href="#item-4">Κεφάλαιο 8</a>
            <nav class="nav nav-pills flex-column">
              <a class="nav-link ms-3 my-1" href="#item-4-1">Ενότητα 8.1</a>
              <a class="nav-link ms-3 my-1" href="#item-4-2">Ενότητα 8.2</a>
            </nav>

          </nav>
        </nav>
        </div>
        <div class="col-sm-9" style="margin-top: 75px;">
          
      
      <div class="main offset-md-3 pt-1" style="margin-top: 75px;">
          <div 
            data-bs-spy="scroll"
            data-bs-target="#navbar-example3"
            data-bs-offset="0"
            tabindex="0"
            
          >
            <h4 id="item-1">Κεφάλαιο 5: Η ζωή στην αρχαία Ακρόπολη</h4>
            <p id="item-1p">Η αρχαία Ακρόπολη δεν ήταν μόνο ένας θρησκευτικός και πολιτιστικός τόπος αλλά και ένα κέντρο ζωής για τους Αθηναίους. Εκτός από τις τελετουργίες και τις θρησκευτικές εκδηλώσεις, η Ακρόπολη λειτουργούσε ως κοινωνικό κέντρο, όπου οι πολίτες συναντιόντουσαν για συζητήσεις, πολιτικές αποφάσεις και διασκέδαση.</p>
            <br>
            <h5 id="item-1-1">5.1: Η καθημερινή ζωή των Αθηναίων στην Ακρόπολη </h5>
            <p id="item-1-1p">Οι Αθηναίοι πολίτες επισκέπτονταν την Ακρόπολη καθημερινά για να συμμετάσχουν σε δημόσιες συνελεύσεις, να προσεύχονται στους θεούς, να παρακολουθούν θεατρικές παραστάσεις και να συναντούν τους φίλους τους στις αγορές και τις πλατείες.</p>
            <br> 
            <h4 id="item-2">Κεφάλαιο 6: Η τέχνη και η πολιτιστική σημασία της Ακρόπολης </h4>
            <p id="item-2p">Η Ακρόπολη αποτελεί έναν καταλύτη για την τέχνη και την πολιτιστική πρόοδο στην αρχαία Ελλάδα. Οι αρχιτέκτονες, οι γλύπτες και οι ζωγράφοι που εργάστηκαν στην Ακρόπολη συνέβαλαν στη δημιουργία μιας από τις πιο λαμπρές πολιτιστικές περιόδους στην ιστορία της ανθρωπότητας.</p>
            <br>
            <h5 id="item-2-1">6.1: Η τέχνη στην Ακρόπολη </h5>
            <p id="item-2-1p">Οι ναοί και τα άλλα κτίρια στην Ακρόπολη διακοσμήθηκαν με εκλεπτυσμένα γλυπτά και ζωγραφικές σκηνές που απεικονίζουν μύθους και ιστορικά γεγονότα. Οι τέχνες αυτές είναι σημαντικές για την κατανόηση της αρχαίας ελληνικής θρησκείας, πολιτικής και κοινωνίας.</p>
            <br>
            <h5 id="item-2-2">6.2: Η ανάκτηση και η σύγχρονη εκτίμηση των αρχαίων τέχνης </h5>
            <p id="item-2-2p">Η ανακάλυψη και η ανακατασκευή αρχαιολογικών ευρημάτων από την Ακρόπολη έχουν βοηθήσει στην αναγνώριση και την εκτίμηση της αρχαίας ελληνικής τέχνης σε διεθνές επίπεδο.</p>
            <br>
            <h4 id="item-3">Κεφάλαιο 7: Η αρχαία Ακρόπολη στη λογοτεχνία και την τέχνη του 21ου αιώνα</h4>
            <p id="item-3p">Η Ακρόπολη συνεχίζει να εμπνέει καλλιτέχνες και συγγραφείς σε όλο τον κόσμο. Η παρουσία της στη σύγχρονη λογοτεχνία, τη ζωγραφική και τη φωτογραφία αναδεικνύει τη μακροχρόνια και συνεχή επιρροή της στον πολιτισμό.</p>
            <br>
            <h5 id="item-3-1">7.1: Η Ακρόπολη στη σύγχρονη λογοτεχνία</h5>
            <p id="item-3-1p">Πολλοί σύγχρονοι συγγραφείς έχουν ενσωματώσει την Ακρόπολη στα έργα τους ως σύμβολο της ανθεκτικότητας, της ομορφιάς και της ιστορίας.</p>
            <br>
            <h5 id="item-3-2">7.2: Η Ακρόπολη στη σύγχρονη τέχνη</h5>
            <p id="item-3-2p">Καλλιτέχνες από όλο τον κόσμο έχουν απεικονίσει την Ακρόπολη στις ζωγραφικές τους, ενισχύοντας την καλλιτεχνική της αξία και την συναισθηματική σημασία για το κοινό.</p>
            
            
            <h4 id="item-4">Κεφάλαιο 8: Η αρχιτεκτονική του Παρθενώνα </h4>
            <p id="item-4p">Ο Παρθενώνας υπήρξε το αποτέλεσμα της συνεργασίας σημαντικών αρχιτέκτων και γλυπτών στα μέσα του 5ου π.Χ.</p>
            <h5 id="item-4-1">8.1: Ιστορία</h5>
            <p id="item-4-1p">Το 446 π.Χ. αρχίζει σύμφωνα με τις πηγές η λατόμευση μαρμάρου για τον Παρθενώνα, αυτόν που θα ολοκληρωθεί τελικά στα πλαίσια του οικοδομικού προγράμματος του Περικλή για την Αθήνα.Οι αρχιτέκτονες του Παρθενώνα ήταν ο Ικτίνος και ο Καλλικράτης, ενώ τη γενική επιστασία του έργου και την ευθύνη για την κατασκευή των γλυπτών είχε ο γλύπτης Φειδίας. Στον ανατολικό χώρο, εμπρός από διώροφη δωρική κιονοστοιχία σχήματος Π, στεκόταν το χρυσελεφάντινο λατρευτικό άγαλμα της Αθηνάς, έργο του Φειδία.</p>
            <br><img src="../../img/arch1.jpg" style="width:100%;"><br>
            <h5 id="item-4-2">8.2: Χαρακτηριστικά</h5>
            <p id="item-4-2p">Κύριο χαρακτηριστικό του Παρθενώνα είναι η έλλειψη ευθειών.Ο στυλοβάτης δεν είναι μια απολύτως οριζόντια επιφάνεια, αλλά παρουσιάζει καμπύλωση.Στον Παρθενώνα χρησιμοποιήθηκε πεντελικό μάρμαρο, εκτός από το στυλοβάτη, ο οποίος κατασκευάστηκε από ασβεστόλιθο. Το πτερό είχε 8 κίονες κατά πλάτος και 17 κατά μήκος.Σε κάτοψη ο κυρίως ναός χωριζόταν σε τρία τμήματα: τον πρόναο, τον σηκό και τον οπισθόναο. Ο σηκός χωριζόταν με εγκάρσιο τοίχο σε δύο άνισους χώρους, έναν μεγαλύτερο στα ανατολικά κι έναν μικρότερο στα δυτικά, τον οπισθόδομο.</p>
            <img src="../../img/arch2.jpg" style="width:100%;"><br><br>
            <br><br><br><br><br><br><br><br>
          </div>
        </div>
        </div>
      </div>
    </div>
<script>
//document.getElementById("item-1p").innerHTML= "";








</script>

    </div>
  <!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>
</html>