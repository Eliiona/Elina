function openTab(evt,tabName) {
    var i, tablinks;
    var x = document.getElementsByClassName("article");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none"; 
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < x.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" w3-white", "");
      }
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " w3-white"; 
  }


/*
    new Vue({
        el:"#chat",
        data:{
            form:{
                user:'',message:'',
            },
            messages:[
                {username:"",text:"",date:"",}
        ]},
        methods:{
            // Date string in form dd.MM.yyyy hh.mm.ss
            makeNewDateString(){
                let dt = new Date()
                let str = '';
                if (dt.getDate()<10){
                    str.concat('0')
                }
                str.concat(dt.getDate(),'.')
                if (dt.getMonth()<10){
                    str.concat('0')
                }
                str.concat(dt.getMonth(),'.',dt.getFullYear(),' ')
                if (dt.getHours()<10){
                    str.concat('0')
                }
                str.concat(dt.getHours(),':')
                if (dt.getMinutes()<10){
                    str.concat('0')
                }
                str.concat(dt.getMinutes(),':')
                if (dt.getSeconds()<10){
                    str.concat('0')
                }
                str.concat(dt.getSeconds())
                return str
            },
            handleSubmit(){
                this.form.message = ''
            },

        } */
