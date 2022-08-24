<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
        body
        {
            position: relative;
            width: 1366px;
            height: 1024px;

            background: #BBD4CE;
        }
        h6
        {
            position: absolute;
            width: 430px;
            height: 48px;
            top: 105px;
            left: 123px;
            color: #264E70;
            font-family: Inter -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";
            font-style: solid;
            font-size: 40px;
            font-weight: 700;
            size: 40px;
            line-height: 100%;
            text-align: left;
            vertical-align: top;
            fill: Solid;

        }

        .card
        {
            position: absolute;
            width: 1120px;
            height: 585px;
            left: 123px;
            top: 220px;

            background: #FFFFFF;
            box-shadow: 0px 100px 80px rgba(0, 0, 0, 0.07), 0px 41.7776px 33.4221px rgba(0, 0, 0, 0.0503198), 0px 22.3363px 17.869px rgba(0, 0, 0, 0.0417275), 0px 12.5216px 10.0172px rgba(0, 0, 0, 0.035), 0px 6.6501px 5.32008px rgba(0, 0, 0, 0.0282725), 0px 2.76726px 2.21381px rgba(0, 0, 0, 0.0196802);
            border-radius: 20px;

        }
        #btn-success
        {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            padding: 12px 24px;
            gap: 10px;

            width: 117px;
            height: 48px;
            left: 183px;
            top: 436px;

            background: #00AE81;
            border-radius: 8px;
        }
        #nom
        {
            align: inside;
            width: 289px;
            height: 48px;
            top: 258px;
            left: 183px;
            border-radius: 8px;
            padding: 12px 220px 12px 24px;
            gap: 10px;
            color: rgba(0,0,0,1);
            border:  1px solid #000000 ;
            box-sizing: border-box;
            display: flex;
            flex-direction: row;
            align-items: flex-start;
        }
        #prenom
        {
            display: flex;
            flex-direction: row;
            align-items: flex-start;
            width: 317px;
            height: 48px;
            top: 258px;
            left: 517px;
            border-radius: 8px;
            padding: 12px 220px 12px 24px;
            gap: 10px;
            color: rgba(0,0,0,1) ;
            border:  1px solid #000000 ;
        }
        #age
        {
            background: #FFFFFF;
            width: 304px;
            height: 126px;
            top: 258px;
            left: 879px;
            border-radius: 8px;
            padding: 12px 24px 12px 24px;
            gap: 99px;
            color: #000000 ;
            border: 1px solid #000000 ;

        }
        #tran
        {
            box-sizing: border-box;

            /* Auto layout */

            display: flex;
            flex-direction: row;
            align-items: flex-start;
            padding: 12px 24px;
            gap: 99px;

            width: 304px;
            height: 126px;
            left: 879px;
            top: 358px;

            background: #FFFFFF;
            border: 1px solid #000000;
            border-radius: 8px;
        }
        #40{
            position: absolute;
            width: 60px;
            height: 24px;
            top: 408px;
            left: 908px;
            font-family: inter -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";
            font-weight: 400;
            font-size: 20px;
            line-height: 24.2px;
            color: #000000;

        }
        #30
        {
            position: absolute;
            width: 60px;
            height: 24px;
            left: 907.97px;
            top: 443.97px;

            font-family: Inter -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            line-height: 24px;
            align: left;
            vertical-align: top;

            color: #000000;


        }
        #flexRadioDefault1
        {
            width: 22px;
            height: 22px;
            top: 303px;
            left: 183px;
            background: #FFFFFF;
            border: 3px solid #00AE81;
            align: inside;


        }
        #flexRadioDefault2
        {
            width: 22px;
            height: 22px;
            top: 303px;
            left: 183px;
            background: #FFFFFF;
            border: 3px solid #00AE81;
            align: inside;


        }
        #t
        {
            width: 133px;
            height: 24px;

            font-family: 'Inter';
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            line-height: 24px;

            color: #545454;


            /* Inside auto layout */

            flex: none;
            order: 0;
            flex-grow: 0;
        }
        #label
        {
            width: 53px;
            height: 24px;
            left: 328px;
            top: 302px;

            font-family: 'Inter';
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            line-height: 24px;

            color: #000000;
        }



    </style>
</head>
<body>
<div class="container">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">

        <h6>Ajouter un agriculteur</h6>
        <div class="card ">
            <div>
                <?php echo form_open(base_url("/add_validation")); ?>
                <div class="col-lg">
                    <div class="form-group d-flex my-0">

                        <div class="p-3 ">
                            <?php
                            $data = [
                                'type' => 'radio',
                                'name'=>'Mme',
                                'value'=>'me',
                                'id'=>'flexRadioDefault1',
                            ];

                            echo form_radio($data );

                            ?>
                            <label id="label">Mr.</label>

                        </div>

                        <div class="p-3">
                            <?php
                            $data = [
                                'type' => 'radio',
                                'name'=>'Mme',
                                'value'=>'mme',
                                'id'=>"flexRadioDefault2",
                            ];

                            echo form_radio($data );

                            ?>
                            <label id="label">Mme.</label>

                        </div>
                    </div>
                    <div class="d-flex my-0">
                        <div class="p-3">
                            <?php
                            $data = [
                                'type' => 'text',
                                'name'=>'nom',
                                'id'=>'nom',
                                'placeholder'=>'Nom',
                                'class'=>'form-control'
                            ];
                            echo form_input($data);
                            ?>

                        </div>
                        <div class="p-3 ">
                            <?php
                            $data = [
                                'type' => 'text',
                                'name'=>'prenom',
                                'id'=>'prenom',
                                'placeholder'=>'Prenom',
                                'class'=>'form-control'
                            ];
                            echo form_input($data);
                            ?>
                        </div>

                        <div class="p-3">
                            <select name="tranch_age" class="form-control" id="tran" >
                                <option value="">Tranche d'age</option>
                                <option value="30">30-40</option>
                                <option value="40">40-50</option>
                            </select>

                        </div>
                    </div>
                </div>
                <div class="p-3">

                    <?php
                    echo form_submit('Submit','Ajouter',[
                        'class' =>'btn btn-success ',
                        'id'=>'btn-success',
                    ])
                    ?>
                </div>

                <?php echo form_close(); ?>

            </div>
            <div class="p-4 table-responsive">
                <table class="table ">
                    <thead >
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Cvl</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prenom</th>
                        <th scope="col">age</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if (! empty($tests) && is_array($tests)): ?>
                        <?php foreach ($tests as $person) : ?>
                            <tr>
                                <th>
                                     x
                                </th>
                                <td>
                                    <?php echo $person["Cvl"];?>
                                </td>
                                <td>
                                    <?php echo $person["nom"]; ?>
                                </td>
                                <td>
                                    <?php echo $person["prenom"]; ?>
                                </td>
                                <td>
                                    <?php echo $person["trache_age"]; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                    <?php else: ?>
                        <tr>
                            <td colspan="12">
                                Aucun enregistrement trouver
                            </td>
                        </tr>
                    <?php endif ?>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>

<!-- STYLES -->