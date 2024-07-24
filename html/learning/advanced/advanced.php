<?php
session_start();
if ($_SESSION['user']['current_level']<3){
  header('Location:  ../../learn.php?msg1=user_level_error');

} ?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Προχωρημένο επίπεδο μάθησης</title>
    <meta charset="utf-8" />
    <link rel="icon" href="../../ico.png">

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
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
    <title>Lesson 1 / Advanced</title>

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@docsearch/css@3"
    />
    <style>
	  header {
      background-image: url('../../img/red.jpg');
	  }
  </style>	
  </head>
  <body data-spy="scroll" data-target="#navbar-example3" data-offset="20">
    <div class="container-fluid">
      <div class="row">
        <header class="py-3 mb-3 fixed-top">
          <div class="container-fluid d-flex justify-content-between align-items-center">
            <span class="fs-4">Προχωρημένο επίπεδο μάθησης</span>
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
            <a class="nav-link" href="#item-1">Κεφάλαιο 9</a>
            <nav class="nav nav-pills flex-column">
              <a class="nav-link ms-3 my-1" href="#item-1-1">Ενότητα 9.1</a>
              <a class="nav-link ms-3 my-1" href="#item-1-2">Ενότητα 9.2</a>

            </nav>
            <a class="nav-link" href="#item-2">Κεφάλαιο 10</a>
            <nav class="nav nav-pills flex-column">
              <a class="nav-link ms-3 my-1" href="#item-2-1">Ενότητα 10.1</a>
              <a class="nav-link ms-3 my-1" href="#item-2-2">Ενότητα 10.2</a>
            </nav>
            <a class="nav-link" href="#item-3">Κεφάλαιο 11</a>
            <nav class="nav nav-pills flex-column">
              <a class="nav-link ms-3 my-1" href="#item-3-1">Ενότητα 11.1</a>
              <a class="nav-link ms-3 my-1" href="#item-3-2">Ενότητα 11.2</a>
            </nav>

            <a class="nav-link" href="#item-4">Κεφάλαιο 12</a>
            <nav class="nav nav-pills flex-column">
              <a class="nav-link ms-3 my-1" href="#item-4-1">Ενότητα 12.1</a>
              <a class="nav-link ms-3 my-1" href="#item-4-2">Ενότητα 12.2</a>
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
            <h4 id="item-1">Κεφάλαιο 9: Η τέχνη στην Ακρόπολη κατά τη ρωμαϊκή και βυζαντινή εποχή</h4>
            <p id="item-1p">Κατά τη ρωμαϊκή και βυζαντινή περίοδο, η Ακρόπολη διαμορφώθηκε υπό την επήρεια νέων καλλιτεχνικών ρευμάτων και ιδεών, συνδυάζοντας την αρχαία ελληνική παράδοση με νέες επιρροές από τη ρωμαϊκή και βυζαντινή πολιτιστική κληρονομιά.
                </p>
            <br>
            <h5 id="item-1-1">9.1: Η επιρροή της ρωμαϊκής κατοχής </h5>
            <p id="item-1-1p">Κατά τη ρωμαϊκή εποχή, η Ακρόπολη εξακολούθησε να αποτελεί σημαντικό κέντρο τέχνης και πολιτισμού. Οι Ρωμαίοι ανακαίνισαν και προσέθεσαν νέα κτίρια, ενώ εισήγαγαν στοιχεία της ρωμαϊκής αρχιτεκτονικής όπως η κορινθιακή στήλη και άλλες διακοσμητικές λεπτομέρειες.</p>
            <br>
            <h5 id="item-1-2">9.2: Η επίδραση της βυζαντινής τέχνης </h5>
            <p id="item-1-2p">Κατά τη βυζαντινή εποχή, η Ακρόπολη συνέχισε να είναι σημαντικός θρησκευτικός και πολιτιστικός τόπος. Νέοι ναοί και μνημεία ανεγείρθησαν στην περιοχή, αντικατοπτρίζοντας τις βυζαντινές τάσεις και την προσαρμογή στην Χριστιανική θρησκεία.</p>
            <br>
            <h4 id="item-2">Κεφάλαιο 10: Η αναγέννηση της Ακρόπολης στη μεταβυζαντινή περίοδο</h4>
            <p id="item-2p">Κατά τη μεταβυζαντινή περίοδο, η Ακρόπολη υπέστη αλλαγές στην αρχιτεκτονική και την οργάνωση του χώρου. Νέοι ναοί και άλλα δημόσια κτίρια ανακαινίστηκαν ή κατασκευάστηκαν, με επιρροές από την εποχή της Αναγέννησης.</p>
            <br>
            <h5 id="item-2-1">10.1: Η ανακατασκευή του Παρθενώνα και άλλων μνημείων</h5>
            <p id="item-2-1p">Ο Παρθενώνας και άλλα κοσμήματα της Ακρόπολης ανακαινίστηκαν και επαναφέρθηκαν στη ζωή κατά τη μεταβυζαντινή περίοδο, με νέες τεχνικές και διαδικασίες που διατηρούν αυτά τα μνημεία μέχρι σήμερα.</p>
            <br>
            <h5 id="item-2-2">10.2: Η επιρροή της Ακρόπολης στην τέχνη και την αρχιτεκτονική της Αναγέννησης </h5>
            <p id="item-2-2p">Η Ακρόπολη συνέβαλε σημαντικά στην αναγέννηση της κλασικής αρχιτεκτονικής και τέχνης κατά την περίοδο της Αναγέννησης, επηρεάζοντας καλλιτέχνες και αρχιτέκτονες όπως οι Μιχαήλ Άγγελος και ο Παλαιολόγος.</p>
            <br>
            <h4 id="item-3">Κεφάλαιο 11: Η Ακρόπολη ως παγκόσμιο μνημείο και πολιτιστική κληρονομιά</h4>
            <p id="item-3p">Η Ακρόπολη σήμερα αναγνωρίζεται ως ένα από τα σημαντικότερα αρχαιολογικά μνημεία του κόσμου και παραμένει ως παράδειγμα της ανθεκτικότητας και της αισθητικής της αρχαίας ελληνικής πολιτιστικής κληρονομιάς. Μάλιστα, είναι καταχωρημένη ως Μνημείο Παγκόσμιας Κληρονομιάς από την UNESCO. Η διαχείριση του τουρισμού είναι κρίσιμη για τη διατήρηση και την προστασία του μνημείου.</p>
            <br>
            <h5 id="item-3-1">11.1: Η διαχείριση του τουρισμού και η προστασία της Ακρόπολης</h5>
            <p id="item-3-1p">Η αυξημένη επισκεψιμότητα και οι προκλήσεις που αυτή συνεπάγεται απαιτούν συνεχή προσπάθεια για την προστασία και τη διατήρηση του μνημείου, μέσω εκπαιδευτικών προγραμμάτων και καινοτόμων πρακτικών διαχείρισης.</p>
            <br>
            <h5 id="item-3-2">11.2: Η προσφορά της Ακρόπολης στην παγκόσμια κληρονομιά</h5>
            <p id="item-3-2p">Η Ακρόπολη συνεχίζει να αποτελεί έναν έμβλημα της ανθρώπινης δημιουργίας και αισθητικής, προσφέροντας ένα μάθημα για τη σημασία της πολιτιστικής κληρονομιάς και της διατήρησης της.</p>
            
            
            <h4 id="item-4">Κεφάλαιο 12: Η Θρησκευτική αξία της Ακροπόλεως </h4>
            <p id="item-4p">Ο Παρθενώνας είναι ναός ο οποίος κατασκευάστηκε προς τιμήν της θεάς Αθηνάς, προστάτιδας της πόλης της Αθήνας.</p>
            <br><img src="../../img/Athena_Parthenos.jpg" style="width:49%;margin-right:10px;"><br><br>
            <h5 id="item-4-1">12.1: Το χρυσελεφάντινο άγαλμα της Αθηνάς</h5>
            <p id="item-4-1p">Το γιγάντιο άγαλμα της Αθηνάς είχε πάνω από 12 μέτρα ύψος και ήταν φτιαγμένο από σκαλιστό ελεφαντόδοντο και χρυσό, 1.140 κιλά χρυσού, για την ακρίβεια. Μια δεξαμενή με νερό ήταν τοποθετημένη μπροστά στο άγαλμα για να παρέχει την απαραίτητη για τη συντήρηση του ελεφαντόδοντου υγρασία.Ήταν ντυμένη με μακρύ χιτώνα ως τα πόδια. Φορούσε πέδιλα, τα οποία ήταν διακοσμημένα με ανάγλυφες παραστάσεις που εικόνιζαν τη μάχη των Λαπιθών και των Κενταύρων. Στο κεφάλι φορούσε κράνος διακοσμημένο με σφίγγα και δύο γρύπες. Η αιγίδα της ήταν διακοσμημένη με γοργόνειο. Κρατούσε στο ένα χέρι μια φτερωτή Νίκη, και ακουμπούσε το άλλο στην ασπίδα της, κρατώντας δόρυ που ήταν διακοσμημένο με δράκο. Στην ασπίδα υπήρχαν ανάγλυφες παραστάσεις που εικόνιζαν την Αμαζονομαχία στην εξωτερική και τη Γιγαντομαχία στην εσωτερική πλευρά. Στη βάση υπήρχε ανάγλυφο που εικόνιζε τη γέννηση της Πανδώρας.</p>

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