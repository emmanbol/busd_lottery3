/*generate200Select()
                genInputField(1)
                let selectedVal = 1;

                $("#playID").click(()=> {
                    
                    for(x=1; x<=selectedVal; x++){
                            let first = $("#first_"+x).val()
                            let second = $("#second_"+x).val()
                            a(`First: ${first} and Second: ${second}`)
                        }
                })

                function selectOption(){
                    let selectID = document.getElementById("_select1")
                    selectedVal = selectID.options[selectID.selectedIndex].text
                    //console.log(selectedVal)
                    genInputField(selectedVal)
                }

                function genInputField(count){
                    let third = ''
                    for(let i=1; i<=count; i++){
                        let first = `<input type="text" class="w3-round-xlarge w3-large w3-center" 
                                            style="width: 15%; margin: 2px; font-weight: bold;" id="first_${i}" />`
                        let second = `<input type="text" class="w3-round-xlarge w3-large w3-center" 
                                            style="width: 15%; font-weight: bold;" id="second_${i}" />`

                        if(i == count)
                            third += first.concat(second)
                        else
                            third += first.concat(second).concat("<br/>")
                       
                    }

                    $("#div_for_autoInput").html(third)
                    
                }

                /*let id = 0;
                function newInputs(){
                    let parent = document.body
                    let field = document.createElement('input')
                    //<input type="text" class="w3-round-large w3-medium w3-center" style="width: 15%; color:#dc9a65;" id="first_" />
                    field.className = 'myclassname'
                    field.style = 'display:block'
                    parent.appendChild(field)
                    id += 1
                }

                function generate200Select(){
                    let parent = document.body
                    let selectList = document.getElementById('_select1')

                    for(let i=1; i<=200; i++){
                        let option = document.createElement('option')
                        option.value = "val_"+i
                        option.text = i
                        selectList.appendChild(option)
                    }
                }

                function randy(){
                    setTimeout(randy2, 500);
                }
                
                function randy2(){
                    //num1 = Math.floor(Math.random() * 1000) //returns random integer from 0 to 999
                    //let num2 = Math.floor(Math.random() * 1000)

                    //for(x=0; x<1000; x++){
                            //num1 = Math.floor(Math.random() * 10) //returns random integer from 0 to 9
                            //num2 = Math.floor(Math.random() * 10)
                    //}

                    let m = selectedVal;
                    for(i=1; i<=m; i++){
                        num1 = Math.floor(Math.random() * 10)
                        num2 = Math.floor(Math.random() * 10)
                        let num1String = num1.toString()
                        let num2String = num2.toString()
                        a(num1String+' and '+num2String)
                        $("#first_"+i).val(num1String);
                        $("#second_"+i).val(num2String);
                    }
                    
                }
                const a = (v) => {
                    console.log(v)
                }*/