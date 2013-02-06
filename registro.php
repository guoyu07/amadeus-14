<div class="wrapper">
            <div class="grids top">

        <div class="grid-6 grid">
            <h2>Address</h2>
            <div>
                <p class="bottom">
                    Jane Doe<br />
                    Some street 123<br />
                    Name of State<br />
                    Country<br /><br />
                    Phone: 123 456 789<br />
                    Fax: 123 456 789 - 11<br />
                    Email: jane@some.com
                </p>
            </div>


            <div class="green bottom">
                <h3>Formalize</h3>
                            <p>This subpage includes the great JQuery plugin <strong>
                                    <a href="http://formalize.me/" title="Formalize Website">Formalize</a></strong>
                                by Nathan Smith.
                                <a href="http://formalize.me/" title="Formalize Website">Visit the website</a> to find out what it does and see the demos!
                                You don´t have to use a table as shown here (this is just an example), you can build your form without tables, too.
                                Inspect the CSS to utilize the classes that fit your needs.<br />
                                Comment or delete the section "Forms" in inuit.css when you make use of Formalize so the styles won´t interfere.
                            </p>
                        </div>

                        <div>
                            <p class="message warning bottom">
                                <b>Note:</b> This is just a demo for contact form styles and behaviour. <b>It doesn't actually submit anything.</b>
                                To make it work, you will have to include a fitting script.
                            </p>
            </div>
        </div>

    
    
    
    <!--===============================================================  Formulario de Regristro =============-->
        <div class="grid-10 grid">

            <h2>Registro de Usuarios</h2>
            <form  action="#" method="post" enctype="multipart/form-data" onsubmit="return false">
                <table class="form">
                      <tr>
                        <th>
                            <label for="nick">
                               Nick:
                            </label>
                        </th>
                        <td>
                            <input class="input_full" type="text" id="nick" name="nick" required="required" />

                        </td>
                    </tr>
                      <tr>
                        <th>
                            <label for="password">
                                Password:
                            </label>
                        </th>
                        <td>
                            <input class="input_full" type="password" id="name" name="password" required="required" />

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label for="name">
                                Nombre:
                            </label>
                        </th>
                        <td>
                            <input class="input_full" type="text" id="name" name="name" required="required" />

                        </td>
                    </tr>
                     <tr>
                        <th>
                            <label for="apellidos">
                                Apellidos:
                            </label>
                        </th>
                        <td>
                            <input class="input_full" type="text" id="apellidos" name="apellidos" required="required" />

                        </td>
                    </tr>
                      <tr>
                        <th>
                            <label for="dni">
                                DNI:
                            </label>
                        </th>
                        <td>
                            <input class="input_full" type="text" id="dni" name="dni" required="required" />

                        </td>
                    </tr>
                    
                    <tr>
                        <th>
                            <label for="email">
                                Email:
                            </label>
                        </th>
                        <td>

                            <input class="input_full" type="e-mail" id="email" name="e-mail" required="required" />
                        </td>
                    </tr>
                    
                   

                    <tr>

                        <th>
                            <label for="tel">
                                Telefono
                            </label>
                        </th>
                        <td>
                            <input class="input_full" type="tel" id="tel" name="tel" required="required" />
                        </td>
                    </tr>
            
                </table>

                <p>
                    <input type="submit" value="Registrar" class="float_left" />
                    <input type="reset" value="Limpiar" class="float_right">
                </p>
            </form>


        </div><!--end of grid-10-->
    </div><!--end of grids-->
    
</div>