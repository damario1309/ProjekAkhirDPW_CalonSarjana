function check(){
	var c=0;
	var q1=document.quiz.soal1.value;
	var q2=document.quiz.soal2.value;
	var q3=document.quiz.soal3.value;
	var q4=document.quiz.soal4.value;
	var q5=document.quiz.soal5.value;
	var result=document.getElementById("result");
	var quiz=document.getElementById("quiz");
	if(q1=="Kelelawar") {c++}
	if(q2=="Menjaga Jarak") {c++}
	if(q3=="China") {c++}
	if(q4=="Berpergian tanpa memakai masker") {c++}
	if(q5=="Telinga") {c++}
		quiz.style.display="none";
		if(c<=2){
			result.textContent=`Kamu Mendapatkan Nilai ${c}. Dari 5 Pertanyaan`
		}else{
			result.textContent=`Kamu Mendapatkan Nilai ${c}. Dari 5 Pertanyaan!`
		}
}