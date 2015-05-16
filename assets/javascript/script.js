// Ketika dokumen siap
$(document).ready( function() {

	// jika tombol masukan di-klik, munculkan opsi input pemasukan
	$(".main.nav nav a[id='pemasukan']").click( function() {

		$("section.input header.input.header").html("Input Pemasukan");

		$("section.input .wrapper form input[name='tipe']").attr("value", "pemasukan");
		var temp=$("#idpemasukan span").text();
		
		
		 $('#FormInputOutput').attr('action', temp);

		$("section.input .wrapper form section.left #category").hide(0);

		$("section.input").animate({
			bottom: "0px"
		}, "slow");

		return false;
	});

	// jika tombol pengeluaran di-klik, muncul opsi input pengeluaran
	$(".main.nav nav a[id='pengeluaran']").click( function() {

		var temp1=$("#idpengeluaran span").text();
			
		 $('#FormInputOutput').attr('action', temp1);

		$("section.input header.input.header").html("Input Pengeluaran");

		$("section.input .wrapper form input[name='tipe']").attr("value", "pengeluaran");

		$("section.input .wrapper form section.left #category").show(0);

		$("section.input").animate({
			bottom: "0px"
		}, "slow");

		return false;
	});

	// tombol memunculkan hasil rekap
	$(".main.nav nav a[id='info']").click( function() {

		$(".main.body .summary").show("fast");
		$(".main.body .summary-text").hide("fast");

		return false;
	});

	// tombol memunculkan hasil rekap dalam format plain text
	$(".main.nav nav a[id='sumtext']").click( function() {

		$(".main.body .summary").hide("fast");
		$(".main.body .summary-text").show("fast");

		return false;
	});

	// tombol hapus data
	$(".main.nav nav a[id='clearstorage']").click( function() {

		resetLocalStorage();

		return false;
	});
	var kategori=['lala','Transportasi', 'Makanan', 'Hiburan','Lain-Lain']
	// tombol radio button kategori pengeluaran
	$("section.input .wrapper form section.left #category .cat.button").click( function() {
		$("section.input .wrapper form section.left #category .cat.button.active").removeClass("active");
		$(this).addClass("active");

		$("section.input .wrapper form section.left #category input[name='kategori']").attr("value", $(this).attr("id"));
		$("section.input .wrapper form section.left #category label.title.label").html(kategori[$(this).attr("id")]);
	});

	// tombol cancel
	$("section.input .wrapper form section.right #cancel-input").click( function() {

		restoreForm();

		$("section.input").animate({
			bottom: "-420px"
		}, "slow");
	});

	//tombol submit
	/*$("section.input .wrapper form section.right #submit-input").click( function() {

		if(typeof(Storage) == "undefined") {
			alert( "Browser anda tidak men-support fitur local storage, cobalah browser lain yang lebih modern" );	//jika tidak mendukung local storage
		} else {
			var validation = validateForm(); //validasi form manual javascript
			console.log(validation);

			if (validation) { // jika tervalidasi
				restoreForm();

				//masukkan input
				var newInput = [];
				newInput[0] = $("section.input .wrapper form input[name='tipe']").val();
				newInput[1] = $("section.input .wrapper form section.left .field input[name='penjelasan']").val();
				newInput[2] = $("section.input .wrapper form section.left .field input[name='jumlah']").val();
				newInput[3] = $("section.input .wrapper form section.left .field input[name='kategori']").val();
				newInput[4] = $("section.input .wrapper form section.left .field input[name='tanggal']").val();
				newInput[5] = $("section.input .wrapper form section.right .field textarea").val();*/

				/* DEBUG
				console.log(newInput[0]);
				console.log(newInput[1]);
				console.log(newInput[2]);
				console.log(newInput[3]);
				console.log(newInput[4]);
				console.log(newInput[5]);
				console.log(JSON.stringify(newInput))*/

				//masukkan data kedalam array 2d
				/*var report = JSON.parse(localStorage.report);
				report[report.length] = JSON.stringify(newInput);

				//simpan di local storage
				localStorage.report = JSON.stringify(report);

				//tutup window input
				$("section.input").animate({
					bottom: "-420px"
			  	}, "slow");

				//catat perubahan
			  	buildLogs();
			  	buildSummary();
				buildLogsText();
				//reset form
			  	$("section.input .wrapper form section.right #cancel-input").click();

			}
		}
		
		return false;
	});*/

	// inisialisasi ketika halaman siap
	/*var init = function() {

		if(typeof(Storage) == "undefined") {
			alert( "Browser anda tidak men-support fitur local storage, cobalah browser lain yang lebih modern" );
		} else {
			if (!localStorage.report) {
				var initStore = [];
				localStorage.report = JSON.stringify(initStore);
			}
			var report = JSON.parse(localStorage.report);
			console.log(report.length)
			buildLogs();
			buildSummary();
			buildLogsText();
		}
	}();

	//fungsi menghapus data dalam web storage
	function resetLocalStorage() {

		if(typeof(Storage) == "undefined") {
			alert( "Browser anda tidak men-support fitur local storage, cobalah browser lain yang lebih modern" );
		} else {
			if (localStorage.report) {
				var initStore = [];
				localStorage.report = JSON.stringify(initStore);
			}
			buildLogs();
			buildSummary();
			buildLogsText();
		}
	}*/

	// fungsi validasi form
	function validateForm() {
		var result = true
		var newInput = [];
		newInput[0] = $("section.input .wrapper form input[name='tipe']").val();
		newInput[1] = $("section.input .wrapper form section.left .field input[name='penjelasan']").val();
		if (newInput[1] == "") { //penjelasan tidak boleh kosong
			$("section.input .wrapper form section.left .field input[name='penjelasan']").parent().addClass("error");
			$("section.input .wrapper form section.left .field input[name='penjelasan']").attr("placeholder", "Penjelasan singkat wajib diisi");
			result = false;
		}

		newInput[2] = $("section.input .wrapper form section.left .field input[name='jumlah']").val();
		if (newInput[1] == "") { //jumlah tidak boleh kosong
			$("section.input .wrapper form section.left .field input[name='jumlah']").parent().addClass("error");
			$("section.input .wrapper form section.left .field input[name='jumlah']").attr("placeholder", "Jumlah harus diisi");
			result = false;
		} else if (isNaN(newInput[2])) { //jumlah harus angka
			$("section.input .wrapper form section.left .field input[name='jumlah']").parent().addClass("error");
			$("section.input .wrapper form section.left .field input[name='jumlah']").attr("placeholder", "Jumlah harus angka");
			result = false;
		}
		newInput[3] = $("section.input .wrapper form section.left .field input[name='tanggal']").val();
		if (newInput[3] == "") { //tanggal harus diisi
			$("section.input .wrapper form section.left .field input[name='tanggal']").parent().addClass("error");
			result = false;
		}

		return result
	}

	// reset form dari error style
	function restoreForm() {
		$("section.input .wrapper form section.left .field input[name='penjelasan']").parent().removeClass("error");
		$("section.input .wrapper form section.left .field input[name='penjelasan']").attr("placeholder", "penjelasan singkat");
		$("section.input .wrapper form section.left .field input[name='jumlah']").parent().removeClass("error");
		$("section.input .wrapper form section.left .field input[name='jumlah']").attr("placeholder", "contoh : 10000");
		$("section.input .wrapper form section.left .field input[name='tanggal']").parent().removeClass("error");
	}

	// catat laporan per masukan/pengeluaran
	/*function buildLogs() {
		if(typeof(Storage) == "undefined") {
			alert( "Browser anda tidak men-support fitur local storage, cobalah browser lain yang lebih modern" );
		} else {
			var logs = JSON.parse(localStorage.report); //parse JSON ke array
			var logsString = "";

			for (var i = 0; i < logs.length; i++) { // baca data
				var aLog = "";
				var data = JSON.parse(logs[i]);

				aLog = "<div class='item clearfix'>";

				if (data[0] == "pengeluaran")
					aLog = aLog + "<div class='red desc'>";
				else
					aLog = aLog + "<div class='desc'>";

				aLog = aLog + "<p class='title'>" + data[1] + "</p>";

				if (data[0] == "pengeluaran")
					aLog = aLog + "<p class='type'>" + data[3] + "</p>";

				aLog = aLog + "<p class='date'>" + data[4] + "</p>";
				aLog = aLog + "<p class='detail'>" + data[5] + "</p>";
				aLog = aLog + "</div>";
				aLog = aLog + "<div class='amount'>Rp. " + data[2] + " ,- </div>";
				aLog = aLog + "</div>";

				logsString = logsString + aLog;
			}

			$(".main.body .laporan").html(logsString);
		}
	}
*/
	//Saldo Penerimaan
	//Saldo Pengeluaran
	//(per kategori)
	//saldo akhir

	// fungsi catat perubahan dalam data*/
	function buildSummary() {
		if(typeof(Storage) == "undefined") {
			alert( "Browser anda tidak men-support fitur local storage, cobalah browser lain yang lebih modern" );
		} else {
			var logs = JSON.parse(localStorage.report);
			var pemasukan = 0;
			var pengeluaran = 0;
			var pengeluaranTransportasi = 0;
			var pengeluaranKonsumsi = 0;
			var pengeluaranHiburan = 0;
			var pengeluaranLain = 0;
			var totalSaldo = 0;

			for (var i = 0; i < logs.length; i++) {
				var data = JSON.parse(logs[i]);
				if (data[0] == "pemasukan") {
					pemasukan += Number(data[2]);
				} else {
					if (data[3] == "Transportasi") pengeluaranTransportasi += Number(data[2]);
					else if (data[3] == "Konsumsi") pengeluaranKonsumsi += Number(data[2]);
					else if (data[3] == "Hiburan") pengeluaranHiburan += Number(data[2]);
					else if (data[3] == "Lain-Lain") pengeluaranLain += Number(data[2]);
					pengeluaran += Number(data[2]);
				}
			}

			totalSaldo = pemasukan - pengeluaran;

			$("section.summary table tr td[class='out']").html("<strong>"+pengeluaran+"</strong>");
			$("section.summary table tr td[class='out-t']").html(pengeluaranTransportasi);
			$("section.summary table tr td[class='out-k']").html(pengeluaranKonsumsi);
			$("section.summary table tr td[class='out-h']").html(pengeluaranHiburan);
			$("section.summary table tr td[class='out-l']").html(pengeluaranLain);
			$("section.summary table tr td[class='in']").html("<strong>"+pemasukan+"</strong>");


			$("section.summary table tr td[class='total']").html("<strong class='very'>"+totalSaldo+"</strong>");
		}
	}

	// fungsi catat perubahan dalam data* dan ditampilkan dalam format plain-text/
	function buildLogsText() {
		if(typeof(Storage) == "undefined") {
			alert( "Browser anda tidak men-support fitur local storage, cobalah browser lain yang lebih modern" );
		} else {
			var logs = JSON.parse(localStorage.report);
			var logsString = "";

			for (var i = 0; i < logs.length; i++) {
				var aLog = "";
				var data = JSON.parse(logs[i]);

				aLog = aLog + data[0].toUpperCase() + "\n";
				aLog = aLog +  data[1] + "\n";

				if (data[0] == "pengeluaran")
					aLog = aLog + "Kategori :" + data[3] + "\n";

				aLog = aLog + "Tanggal : " + data[4] + "\n";
				aLog = aLog + "Total : Rp. " + data[2] + " ,-\n";
				aLog = aLog + "Detail : \n" + data[5] + "\n\n";

				logsString = logsString + aLog;
			}

			var pemasukan = 0;
			var pengeluaran = 0;
			var pengeluaranTransportasi = 0;
			var pengeluaranKonsumsi = 0;
			var pengeluaranHiburan = 0;
			var pengeluaranLain = 0;
			var totalSaldo = 0;

			for (var i = 0; i < logs.length; i++) {
				var data = JSON.parse(logs[i]);
				if (data[0] == "pemasukan") {
					pemasukan += Number(data[2]);
				} else {
					if (data[3] == "Transportasi") pengeluaranTransportasi += Number(data[2]);
					else if (data[3] == "Konsumsi") pengeluaranKonsumsi += Number(data[2]);
					else if (data[3] == "Hiburan") pengeluaranHiburan += Number(data[2]);
					else if (data[3] == "Lain-Lain") pengeluaranLain += Number(data[2]);
					pengeluaran += Number(data[2]);
				}
			}

			totalSaldo = pemasukan - pengeluaran;

			logsString = logsString + "\nLAPORAN REKAPITULASI\n"

			logsString = logsString + "Pengeluaran Transportasi : " + pengeluaranTransportasi + "\n";
			logsString = logsString + "Pengeluaran Konsumsi : " + pengeluaranKonsumsi + "\n";
			logsString = logsString + "Pengeluaran Hiburan : " + pengeluaranHiburan + "\n";
			logsString = logsString + "Pengeluaran Lain-Lain : " + pengeluaranLain + "\n";
			logsString = logsString + "TOTAL PENGELUARAN : " + pengeluaran + "\n";
			logsString = logsString + "TOTAL PEMASUKAN : " + pemasukan + "\n";
			logsString = logsString + "----------------------------------------------- (+)\n";
			logsString = logsString + "TOTAL SISA SALDO : " + totalSaldo;

			$(".main.body .summary-text form textarea").val(logsString);
		}
	}

});