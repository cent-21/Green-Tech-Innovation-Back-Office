document.addEventListener('alpine:init', () => {
    
    Alpine.data('main_init', () => ({
        isActive: true,
        toggleWidth() {
          bsOffcanvas = new bootstrap.Offcanvas(offcanvasExample)
          bsOffcanvas.show()
        }
    }));
    
    Alpine.data('login_form', () => ({
        error_message: '',
        success_message: '',
        error_password: '',
        error_username: '',
        password: '',
        username: '',
        loading: false,
        isRequired(value) {
            return (value.length == 0) ? 'Veuillez remplir ce champs' : ''
        },
        checkLengh(value, minLength = 0, maxLengh = 0) {
            if (value.length < minLength) {
                return 'Au moins '+minLength+' caratères'
            } 
        },
        setCookie(cname,cvalue,exdays) {
          const d = new Date();
          d.setTime(d.getTime() + (exdays*24*60*60*1000));
          let expires = "expires=" + d.toGMTString();
          document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
        },
        login() {
            this.loading = true

            let myHeaders = new Headers();
            myHeaders.append("Cookie", "PHPSESSID=mpq80tluh25l025v4fu644ilg6");

            let formdata = new FormData();
            formdata.append("adminUsername", this.username);
            formdata.append("adminPassword", this.password);

            let requestOptions = {
              method: 'POST',
              headers: myHeaders,
              body: formdata,
              redirect: 'follow'
            };

            this.error_username = this.isRequired(this.username)
            this.error_password = this.isRequired(this.password)

            this.loading = false

            if (this.error_username === '' && this.error_password === '') {
                this.loading = true
                fetch("http://localhost:1200/api/login", requestOptions)
                .then(response => response.json())
                .then(data => {
                console.log(data)
                    this.loading = false
                    if (data.connected) {
                        console.log('ok')
                        this.setCookie('3499483A4E1DDFA04A6776FA92F37D85', data.adminId, 365)
                        window.location.href="http://localhost/ifri_dash/distinction"
                    } else {
                        console.log(data.error_username)
                        this.error_username = data.error_username
                        this.error_password = data.error_password
                    }
                  })
                  .catch(error => console.log('error', error));
            }

        }
    }));

    
});

