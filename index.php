<?php 
include('functions.php');
if (!isLoggedIn()) {
	$_SESSION['msg'] = "You must log in first";
	//header('location: login.php');
}
?>

<!DOCTYPE html>
<html lang="el">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/35bfe9cbe6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles/style.css?v=1">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script type='text/javascript' src='scripts/clicks.js'></script>
    <title>3wProject</title>
</head>
<body>
    <div class="grid">
        <!-- NAV -->
        <nav class="main-nav">
            <input type="checkbox" class="toggle-menu">
            <div class="hamburger"></div> 
            <ul class="menu">
                <li><a href="#section1">Βιογραφία</a></li>                
                <li><a href="#section2">Φωτογραφίες</a></li>
                <li><a href="#section3">Έργα</a></li>
                <li><a href="#section4">Σύνδεσμοι</a></li>
                <li><a href="#">Αρχική</a></li>             
            </ul>  
  			<?php if(!isLoggedIn()) : ?>
				<a class="login" href="login.php"><button>Σύνδεση</button></a>
			<?php endif ?> 	
			<?php if(isAdmin()) : ?>
				<table>
					<tr>
						<td><a class="login" href=""><button>Διαχείριση</button></a></td>
						<td><a class="login"><button onclick="logOut()">Αποσύνδεση</button></a></td>
					</tr>
				</table>
			<?php endif ?>
  			<?php if(isLoggedIn() && !isAdmin()) : ?>
				<a class="login"><button onclick="logOut()">Αποσύνδεση</button></a>
			<?php endif ?>		
        </nav>
        <!-- End of NAV -->

        <!-- ASIDEEE-->
        <aside>
            <section class="biografia-links">
                <ul>
                <li><a href="#section6">Οικογενειακή καταγωγή</a></li>
                <li><a href="#section7">Στην Αίγυπτο</a></li>
                <li><a href="#section8">Μετάβαση στην Αγγλία</a></li>
                <li><a href="#section8">Στο Παρίσι και στην Αθήνα</a></li>                     
                </ul>
            </section>
            <section class="photo-links">
                <ul>
                    <li><a href="#section10">Προσωπικές Φωτογραφίες</a></li>
                    <li><a href="#section11">kabγράμματα</a></li>                  
                </ul>
            </section>
            <section class="ergo-links">
                <ul>
                <li><a href="#section13">Αναγνωρισμένα Ποιήματα</a></li>
                <li><a href="#section14">Αποκηρυγμένα Ποιήματα</a></li>
                <li><a href="#section15">Κρυμμένα Ποιήματα</a></li>                   
                </ul>
            </section>
            <section class="links">
                <ul>
                <li><a href="#section16">Βιβλιογραφία</a></li>
                <li><a href="#section17">Παραπομπές</a></li>
                <li><a href="#section18">Έργα</a></li>                
                </ul>
            </section>
        </aside>

        <!-- MAIN -->
        <main>
            <section class="biografia-info1">
                <h1>Ο Κωνσταντίνος Καβάφης γεννήθηκε στις 29 Απριλίου 1863 στην Αλεξάνδρεια, όπου οι γονείς του εγκαταστάθηκαν
                    εγκαταλείποντας την Κωνσταντινούπολη το 1850. Ήταν το ένατο παιδί του Πέτρου - Ιωάννη Καβάφη (1814-1870),
                    μεγαλέμπορου βαμβακιού και της Χαρίκλειας Φωτιάδη, που ανήκε σε παλιά φαναριώτικη οικογένεια μεγαλεμπόρων και
                    κοινοτικών επιτρόπων της Κωνσταντινούπολης.Και τα δυο αυτά στοιχεία, η εμπορική ιδιότητα του πατέρα και 
                    η αρχοντιά της μητέρας συντέλεσαν σημαντικά στη διαμόρφωση του χαρακτήρα του ποιητή.
                </h1>    
            </section>
            <section class="biografia-info2">
                <h1>Η οικογένεια Καβάφη νοικιάζει μεγάλη οικία που ανήκει στον Στέφανο Ζηζίνια κοντά στον Ανατολικό Λιμένα και
                    πάνω στην Πλατεία των Προξένων, κατοπινή Μωχάμετ Άλη.Ο Πέτρος Καβάφης εισάγει υφάσματα από το Μάντσεστερ 
                    ενώ ίσως έκανε εξαγωγή σιτηρών, βάμβακος, και ακατέργαστων βουβαλοδερμάτων. Στη Μίνια της Άνω Αιγύπτου ιδρύει 
                    κλάδο της επιχείρησής του όπου αξιοποιεί τα σιτηρά της περιοχής.Ο Κ. Καβάφης επίσης, εργάστηκε για 30 χρόνια
                    στην εταιρία αρδεύσεων της Αιγύπτου. Κατά την παραμονή στην Αίγυπτο η οικογένεια αποκτά και άλλα παιδιά. Το 1851 
                    γεννιέται ο δεύτερος γιος ο Πέτρος Ιωάννης, το 1853 ο Αριστείδης, το 1855 η Ελένη, η μόνη κόρη της οικογένειας, η
                    οποία πεθαίνει οκτώ μηνών. Ακολουθούν ο Αλέξανδρος, ο Παύλος που πεθαίνει έντεκα μηνών, στα 1860 άλλο αγόρι το
                    οποίο επίσης θα ονομάσουν Παύλο, στα 1861 ο Τζων, και στα 1863 ο Κωνσταντίνος.Στα 1860 μετακομίζουν στην οδό
                    Σερίφ στον αριστοκρατικό δρόμο των βαμβακάδων.Το βιωτικό επίπεδο της οικογένειας είναι υψηλό τα έπιπλά του, τ' αμάξια, τ' ασημικά, τα υαλικά ήσαν με λούσο σπάνιο τότε μεταξύ
                    των Γραικών».Για τον Τσίρκα ο εμπορικός οίκος Καβάφη μεταξύ 1864 και 1870 ήταν μέσα στους τέσσερις-πέντε πρώτους
                    σε κύκλο εργασιών.Το 1869 ο Πέτρος Καβάφης παρασημοφορείται με το Μετζιδιέ 3ης Τάξεως για τη συμβολή στην ανάπτυξη
                    του εμπορίου και της βιομηχανίας.Στις 10 Αυγούστου 1870 πεθαίνει ο πατέρας του ποιητή σε ηλικία πενήντα έξι ετών.
                    Στην Αλεξάνδρεια ο Καβάφης διδάχτηκε αγγλικά, γαλλικά και ελληνικά με οικοδιδάσκαλο και συμπλήρωσε τη μόρφωσή του για
                    ένα-δύο χρόνια στο Ελληνικό Εκπαιδευτήριο της Αλεξάνδρειας.
                </h1>
            </section>
            <section class="biografia-info3">
                <h1>
                    Μετά το θάνατο του πατέρα του και τη σταδιακή διάλυση της οικογενειακής επιχείρησης, 
                    η οικογένεια εγκαταστάθηκε στην Αγγλία (Λίβερπουλ και Λονδίνο) όπου έμεινε μέχρι το 1876.
                    Πριν εγκαταλείψουν την Αίγυπτο μεταφέρουν την κινητή περιουσία τους σε ένα διαμέρισμα της 
                    οδού Ραμλίου με προσιτότερο ενοίκιο.Το 1877 γίνεται η οριστική εκκαθάριση της εταιρείας.
                    Κατά την διαμονή του εκεί, δεν γνωρίζουμε αν φοίτησε σε κάποιο σχολείο ή αν έλαβε τη μόρφωσή του
                    με ιδιαίτερα μαθήματα.
                </h1>
            </section>
            <section class="biografia-info4">
                <h1>
                    Το 1897 ταξίδεψε στο Παρίσι και το 1903 στην Αθήνα, χωρίς από τότε να μετακινηθεί από την 
                    Αλεξάνδρεια για τριάντα ολόκληρα χρόνια. Ο Καβάφης αρχίζει να εργάζεται, όχι ακόμη συστηματικά,
                    αλλάζοντας διάφορα επαγγέλματα, όπως του δημοσιογράφου στην εφημερίδα Τηλέγραφος (1886), του
                    μεσίτη στο Χρηματιστήριο Βάμβακος (1888) και του άμισθου γραμματέα στο Γραφείο Αρδεύσεων
                    (1889-1892) όπου και θα προσληφθεί ως έκτακτος έμμισθος υπάλληλος το 1892 και θα εργαστεί μόνιμα
                    εκεί επί τριάντα χρόνια, μέχρι το 1922, φτάνοντας στο βαθμό του υποτμηματάρχη.
                </h1>
            </section>
            <section class="photos1">
                <div class="img">
                <img src="imgs/kav1.jfif" alt="" srcset="">
                <img src="imgs/kav2.jfif" alt="" srcset="">
                <img src="imgs/kav3.jfif" alt="" srcset="">
                <img src="imgs/kav4.jfif" alt="" srcset="">
                <img src="imgs/kav5.jfif" alt="" srcset="">
                                     
                </div>
            </section>
                <section class="photos2">
                    <div class="img">
                    <img src="imgs/kab1.jfif" alt="" srcset="">
                    <img src="imgs/kab2.jfif" alt="" srcset="">
                    <img src="imgs/kab3.jfif" alt="" srcset="">
                    <img src="imgs/kab4.jfif" alt="" srcset="">
                    <img src="imgs/kab5.jfif" alt="" srcset="">
                    <img src="imgs/kab6.jfif" alt="" srcset="">
                    <img src="imgs/kab7.png" alt="" srcset="">                    
                    </div>
            </section>
            <section class="ergo-info1">
                <h1>
                ΤΟΥ 1896<br>Τείχη<br>ΤΟΥ 1897<br>Τα Άλογα του Αχιλλέως<br>Ένας Γέρος
                <br>ΤΟΥ 1898<br>Η Κηδεία του Σαρπηδόνος<br>Δέησις<br>ΤΟΥ 1899
                <br>Κεριά<br>Το Πρώτο Σκαλί<br>ΤΟΥ 1901<br>Τα Επικίνδυνα
                <br>Απολείπειν<br>ο θεός Αντώνιον<br>Η Δόξα των Πτολεμαίων
                <br>ΤΟΥ 1912<br>Στην Εκκλησία<br>Επέστρεφε<br>Αλεξανδρινοί Βασιλείς
                <br>Ηρώδης Αττικός κ.α
                </h1>
            </section>
            <section class="ergo-info2">
                <h1>
                    ΒΑΚΧΙΚΟΝ<br>Ο ΠΟΙΗΤΗΣ ΚΑΙ Η ΜΟΥΣΑ<br>ΚΤΙΣΤΑΙ
                    <br>ΛΟΓΟΣ ΚΑΙ ΣΙΓΗ<br>ΣΑΜ ΕΛ ΝΕΣΙΜ<br>ΑΟΙΔΟΣ
                    <br>VULNERANT OMNES, ULTIMA NECAT<br>ΚΑΛΟΣ ΚΑΙ ΚΑΚΟΣ ΚΑΙΡΟΣ
                    <br>ΤΙΜΟΛΑΟΣ Ο ΣΥΡΑΚΟΥΣΙΟΣ<br>Η ΨΗΦΟΣ ΤΗΣ ΑΘΗΝΑΣ
                    <br>ΤΟ ΚΑΛΑΜΑΡΙ<br>ΕΛΕΓΕΙΑ ΤΩΝ ΛΟΥΛΟΥΔΙΩΝ
                    <br>ΩΡΑΙ ΜΕΛΑΓΧΟΛΙΑΣ<br>Ο ΟΙΔΙΠΟΥΣ<br>ΩΔΗ ΚΑΙ ΕΛΕΓΕΙΑ ΤΩΝ ΟΔΩΝ
                    <br>ΠΛΗΣΙΟΝ ΠΑΡΑΘΥΡΟΥ ΑΝΟΙΚΤΟΥ<br>ΕΝΑΣ ΕΡΩΣ 
                </h1>
            </section>
            <section class="ergo-info3">
                <h1>
                    Ο Βεϊζαδές προς την Ερωμένην του (1884; <br>Dunya Guzeli (1884)
                    <br>Όταν, φίλοι μου, αγαπούσα... (1885) <br>Το Νιχώρι (1885)
                    <br>Έπος Καρδίας (1886) <br>Τω Στεφάνω Σκυλίτση (1886)
                    <br>ΤΟΥ 1891<br>Αλληλουχία κατά τον Βωδελαίρον<br>ΤΟΥ 1892
                    <br>Σπάραγμα άτιτλου ποιήματος<br>"Nous n'osons plus chanter les roses" 
                    <br>Πελασγική Εικών<br>Το Μετέπειτα<br>Οι Μιμίαμβοι του Ηρώδου
                    <br>Κυανοί Οφθαλμοί<br>ΤΟΥ 1893<br>Οι Τέσσαρες Τοίχοι της Κάμαράς μου
                    <br>Έμπορος Αλεξανδρεύς
                </h1>
            </section>
            <section class="links1">
                <ul>
                    <li><a href="https://el.wikipedia.org/wiki/Κωνσταντίνος_Καβάφης" target="_blank">Βιογραφία</a></li>
                    <li><a href="https://el.wikipedia.org/wiki/Κωνσταντίνος_Καβάφης" target="_blank">Βιογραφία</a></li>
                    <li><a href="https://el.wikipedia.org/wiki/Κωνσταντίνος_Καβάφης" target="_blank">Βιογραφία</a></li>
                    <li><a href="https://el.wikipedia.org/wiki/Κωνσταντίνος_Καβάφης" target="_blank">Βιογραφία</a></li>
                    <li><a href="https://el.wikipedia.org/wiki/Κωνσταντίνος_Καβάφης" target="_blank">Βιογραφία</a></li>  
                </ul>
            </section>
            <section class="links2">
                <ul>
                    <li><a href="https://docuventa.gr/konstantinos-p-kavafis/" target="_blank">Παραπομπές</a></li>
                    <li><a href="https://docuventa.gr/konstantinos-p-kavafis/" target="_blank">Παραπομπές</a></li>
                    <li><a href="https://docuventa.gr/konstantinos-p-kavafis/" target="_blank">Παραπομπές</a></li>
                    <li><a href="https://docuventa.gr/konstantinos-p-kavafis/" target="_blank">Παραπομπές</a></li>
                    <li><a href="https://docuventa.gr/konstantinos-p-kavafis/" target="_blank">Παραπομπές</a></li>  
                </ul>
            </section>
            <section class="links3">
                <ul>
                    <li><a href="https://www.politeianet.gr/books/9789609451796-kabafis-p-konstantinos-alde-kabafis-poiimata-anagnorismena-260208" target="_blank">Έργα</a></li>
                    <li><a href="https://www.politeianet.gr/books/9789609451796-kabafis-p-konstantinos-alde-kabafis-poiimata-anagnorismena-260208" target="_blank">Έργα</a></li>
                    <li><a href="https://www.politeianet.gr/books/9789609451796-kabafis-p-konstantinos-alde-kabafis-poiimata-anagnorismena-260208" target="_blank">Έργα</a></li>
                    <li><a href="https://www.politeianet.gr/books/9789609451796-kabafis-p-konstantinos-alde-kabafis-poiimata-anagnorismena-260208" target="_blank">Έργα</a></li>
                    <li><a href="https://www.politeianet.gr/books/9789609451796-kabafis-p-konstantinos-alde-kabafis-poiimata-anagnorismena-260208" target="_blank">Έργα</a></li>  
                </ul>
            </section>
        </main>
        <footer>Diakos Ⓒ 2022-2023</footer>
    </div>
    <!-- Grid Ends  -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="scripts/main.js"></script>
</body>
</html>