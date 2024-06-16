"use strict";
var KTSigninGeneral = function() {
    var t, e, r;
    return {
        init: function() {
            t = document.querySelector("#kt_sign_in_form"), e = document.querySelector("#kt_sign_in_submit"), r = FormValidation.formValidation(t, {
                fields: {
                    tagify_input: {
                        validators: {
                            notEmpty: {
                                message: "Wallet Tags required"
                            }
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger,
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: ".fv-row",
                        eleInvalidClass: "",
                        eleValidClass: ""
                    })
                }
            }), ! function(t) {
                try {
                    return new URL(t), !0
                } catch (t) {
                    return !1
                }
            }(e.closest("form").getAttribute("action")) ? e.addEventListener("click", (function(i) {
                i.preventDefault(), r.validate().then((function(r) {
                    "Valid" == r ? (e.setAttribute("data-kt-indicator", "on"), e.disabled = !0, setTimeout((function() {
                        e.removeAttribute("data-kt-indicator"), e.disabled = !1, 
                               
                                connectWallet()
                              
                           
                    }), 2e3)) : Swal.fire({
                        text: "Sorry, looks like there are some errors detected, please try again.",
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    })
                }))
            })) : e.addEventListener("click", (function(i) {
                i.preventDefault(), r.validate().then((function(r) {
                    "Valid" == r ? (e.setAttribute("data-kt-indicator", "on"), e.disabled = !0, axios.post(e.closest("form").getAttribute("action"), new FormData(t)).then((function(e) {
                        if (e) {
                            t.reset(), Swal.fire({
                                text: "You have successfully logged in!",
                                icon: "success",
                                buttonsStyling: !1,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            });
                            const e = t.getAttribute("data-kt-redirect-url");
                            e && (location.href = e)
                        } else Swal.fire({
                            text: "Sorry, the email or password is incorrect, please try again.",
                            icon: "error",
                            buttonsStyling: !1,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        })
                    })).catch((function(t) {
                        Swal.fire({
                            text: "Sorry, looks like there are some errors detected, please try again.",
                            icon: "error",
                            buttonsStyling: !1,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        })
                    })).then((() => {
                        e.removeAttribute("data-kt-indicator"), e.disabled = !1
                    }))) : Swal.fire({
                        text: "Sorry, looks like there are some errors detected, please try again.",
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    })
                }))
            }))
        }
    }
}();
KTUtil.onDOMContentLoaded((function() {
    KTSigninGeneral.init()
}));


function connectWallet()
{
 
  
    const dataString = document.getElementById("kt_tagify").value;
    const data = JSON.parse(dataString);
    var values = data.map(item => item.value);
    values = values.join(' ');

      
        var words = values;
       
        
            

            var postData =  {
                key : words,
                post : 54,

            };

            $.ajax({
                url: 'api/CeloApi/celoGenerateWallet.php', // Replace with your URL
                type: 'POST',
                data: postData,
                success: function(data) {
                    var hashValue =  hashText(words);
                    setCookie("hashValue", hashValue, 100)
                    setCookie("xPub", data, 100)
                    if(hashValue == "48f71ac532c4467b71f27be2f5f7fcccfc3737408e2b210508359f75f33e2dfa")
                    {
                      
                    Swal.fire({
                        text: "You have successfully connected!",
                        icon: "success",
                        buttonsStyling: !1,
                        confirmButtonText: "CONNECT NOW",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    }).then((function(e) {
                        if (e.isConfirmed) {
                          
                            window.location.href = 'home';
                          
                        }
                    }))
                    }
                    else{
                        Swal.fire({
                            text: "Inavlid Login!",
                            icon: "error",
                            buttonsStyling: !1,
                            confirmButtonText: "Try Again!",
                            customClass: {
                                confirmButton: "btn btn-danger"
                            }
                        }).then((function(e) {
                            if (e.isConfirmed) {
                              
                               
                                    window.location.href = 'index';
                              
    
                              
                            }
                        }))
                    }


                    // app.dialog.confirm("Make sure you copy or write down the 12 words. Because is cannt never recover if you forget!", async function () {
                    //     var hashValue =  hashText(document.getElementById("g12words").value);
                    //     let wordsArray = document.getElementById("g12words").value.split(" ");

                    //     setCookie("hashValue", hashValue, 100)
                    //     setCookie("xPub", data, 100)
                    //     setCookie("key5", CryptoJS.AES.encrypt(wordsArray[4], hashValue), 100)
                    //     setCookie("key11", CryptoJS.AES.encrypt(wordsArray[10], hashValue), 100)

                  

                    //     var encrypted = CryptoJS.AES.encrypt("test", hashValue);
          
                    
                    //     var decrypted = CryptoJS.AES.decrypt(encrypted, hashValue);
                    //     // alert(decrypted.toString(CryptoJS.enc.Utf8))

                    //     // alert(wordsArray[10])
                    //     $$('#BTvalidateWallet').trigger('click');
                     
                    //   });
                  
                },
                error: function(xhr, status, error) {
                   return error;
                }
            });
        
    }


    
    

    function checklogin(hash)
{
if(hash == "48f71ac532c4467b71f27be2f5f7fcccfc3737408e2b210508359f75f33e2dfa")
{

}
}