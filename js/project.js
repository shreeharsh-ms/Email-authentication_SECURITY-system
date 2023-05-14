let i = 0;

function fun() {
    if (i == 0) {
        console.log("alpha");
        document.getElementById('id1').style.display = 'none';
        document.getElementById('id2').style.display = 'block';
        i = i + 1;
    }
    else {
        console.log("beta");
        document.getElementById('id2').style.display = 'none';
        document.getElementById('id1').style.display = 'block';
        i = i - 1;
    }
}