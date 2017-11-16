<?php
require_once('src/CutterGen.php');
$cutter = new CutterGen;
$output = ['cutter' => null, 'length' => 2, 'name' => null];
if (isset($_POST['name']) && !empty($_POST['name'])) {
    $cutter->name($_POST['name']);
    $cutter->length($_POST['length']);    
    $output['cutter'] = $cutter->generate();
    $output['length'] = $_POST['length'];
    $output['name'] = $_POST['name'];
}
?>

<h2><?php echo $output['cutter']; ?></h2>

<form method="post" action="#">
    <input name="name" minlength="2" placeholder="Name" value="<?php echo $output['name']; ?>" required>
    <input name="length" placeholder="Length" type="number" min="2" value="<?php echo $output['length']; ?>" required>
    <button type="submit">Submit</button>
</form>

<hr>

<div>
    <h3>Reference</h3>
    <p class="Wrap-1A" style="font-style: italic;">After initial
        <font style="font-weight: bold;">vowels</font>
    </p>
    <table style="border: Solid 1px #000080; margin-left: .5in;" cellspacing="0">
        <colgroup>
            <col width="120">
            <col width="38">
            <col width="38">
            <col width="38">
            <col width="38">
            <col width="38">
            <col width="38">
            <col width="38">
            <col width="38">
        </colgroup>
        <tbody>
            <tr style="vertical-align: top;">
                <td style="border: Solid 1px #000080; padding-left: 1px; padding-top: 1px; 
                padding-right: 1px; padding-bottom: 1px;" width="119">
                    <p class="Base" style="font-style: italic; font-size: 10pt;">for the second letter:
                    </p>
                </td>
                <td style="border-top: Solid 1px #000080; border-right: Solid 1px #000080; 
                border-bottom: Solid 1px #000080; padding-left: 1px; padding-top: 1px; 
                padding-right: 1px; padding-bottom: 1px;" width="38">
                    <p class="Base" style="text-align: center; font-weight: bold;">b</p>
                </td>
                <td style="border-top: Solid 1px #000080; border-right: Solid 1px #000080; 
                border-bottom: Solid 1px #000080; padding-left: 1px; padding-top: 1px; 
                padding-right: 1px; padding-bottom: 1px;" width="38">
                    <p class="Base" style="text-align: center; font-weight: bold;">d</p>
                </td>
                <td style="border-top: Solid 1px #000080; border-right: Solid 1px #000080; 
                border-bottom: Solid 1px #000080; padding-left: 1px; padding-top: 1px; 
                padding-right: 1px; padding-bottom: 1px;" width="38">
                    <p class="Base" style="text-align: center; font-weight: bold;">l-m</p>
                </td>
                <td style="border-top: Solid 1px #000080; border-right: Solid 1px #000080; 
                border-bottom: Solid 1px #000080; padding-left: 1px; padding-top: 1px; 
                padding-right: 1px; padding-bottom: 1px;" width="38">
                    <p class="Base" style="text-align: center; font-weight: bold;">n</p>
                </td>
                <td style="border-top: Solid 1px #000080; border-right: Solid 1px #000080; 
                border-bottom: Solid 1px #000080; padding-left: 1px; padding-top: 1px; 
                padding-right: 1px; padding-bottom: 1px;" width="38">
                    <p class="Base" style="text-align: center; font-weight: bold;">p</p>
                </td>
                <td style="border-top: Solid 1px #000080; border-right: Solid 1px #000080; 
                border-bottom: Solid 1px #000080; padding-left: 1px; padding-top: 1px; 
                padding-right: 1px; padding-bottom: 1px;" width="38">
                    <p class="Base" style="text-align: center; font-weight: bold;">r</p>
                </td>
                <td style="border-top: Solid 1px #000080; border-right: Solid 1px #000080; 
                border-bottom: Solid 1px #000080; padding-left: 1px; padding-top: 1px; 
                padding-right: 1px; padding-bottom: 1px;" width="38">
                    <p class="Base" style="text-align: center; font-weight: bold;">s-t</p>
                </td>
                <td style="border-top: Solid 1px #000080; border-right: Solid 1px #000080; 
                border-bottom: Solid 1px #000080; padding-left: 1px; padding-top: 1px; 
                padding-right: 1px; padding-bottom: 1px;" width="38">
                    <p class="Base" style="text-align: center; font-weight: bold;">u-y</p>
                </td>
            </tr>
            <tr style="vertical-align: top;">
                <td style="border-left: Solid 1px #000080; border-right: Solid 1px #000080; 
                border-bottom: Solid 1px #000080; padding-left: 1px; padding-top: 1px; 
                padding-right: 1px; padding-bottom: 1px;" width="119">
                    <p class="Base" style="font-style: italic; font-size: 10pt;">use number:</p>
                </td>
                <td style="border-right: Solid 1px #000080; border-bottom: Solid 1px #000080; 
                padding-left: 1px; padding-top: 1px; padding-right: 1px; padding-bottom: 1px;" width="38">
                    <p class="Base" style="text-align: center; font-weight: bold;">2</p>
                </td>
                <td style="border-right: Solid 1px #000080; border-bottom: Solid 1px #000080; 
                padding-left: 1px; padding-top: 1px; padding-right: 1px; padding-bottom: 1px;" width="38">
                    <p class="Base" style="text-align: center; font-weight: bold;">3</p>
                </td>
                <td style="border-right: Solid 1px #000080; border-bottom: Solid 1px #000080; 
                padding-left: 1px; padding-top: 1px; padding-right: 1px; padding-bottom: 1px;" width="38">
                    <p class="Base" style="text-align: center; font-weight: bold;">4</p>
                </td>
                <td style="border-right: Solid 1px #000080; border-bottom: Solid 1px #000080; 
                padding-left: 1px; padding-top: 1px; padding-right: 1px; padding-bottom: 1px;" width="38">
                    <p class="Base" style="text-align: center; font-weight: bold;">5</p>
                </td>
                <td style="border-right: Solid 1px #000080; border-bottom: Solid 1px #000080; 
                padding-left: 1px; padding-top: 1px; padding-right: 1px; padding-bottom: 1px;" width="38">
                    <p class="Base" style="text-align: center; font-weight: bold;">6</p>
                </td>
                <td style="border-right: Solid 1px #000080; border-bottom: Solid 1px #000080; 
                padding-left: 1px; padding-top: 1px; padding-right: 1px; padding-bottom: 1px;" width="38">
                    <p class="Base" style="text-align: center; font-weight: bold;">7</p>
                </td>
                <td style="border-right: Solid 1px #000080; border-bottom: Solid 1px #000080; 
                padding-left: 1px; padding-top: 1px; padding-right: 1px; padding-bottom: 1px;" width="38">
                    <p class="Base" style="text-align: center; font-weight: bold;">8</p>
                </td>
                <td style="border-right: Solid 1px #000080; border-bottom: Solid 1px #000080; 
                padding-left: 1px; padding-top: 1px; padding-right: 1px; padding-bottom: 1px;" width="38">
                    <p class="Base" style="text-align: center; font-weight: bold;">9</p>
                </td>
            </tr>
        </tbody>
    </table>
    <p class="Base" style="margin-top: 0; margin-bottom: 0;">&nbsp;</p>
    <p class="Wrap-1A" style="font-style: italic;">After initial letter
        <font style="font-weight: bold;">S</font>
    </p>
    <table style="border: Solid 1px #000080; margin-left: .5in;" cellspacing="0">
        <colgroup>
            <col width="120">
            <col width="38">
            <col width="38">
            <col width="38">
            <col width="38">
            <col width="38">
            <col width="38">
            <col width="38">
            <col width="38">
        </colgroup>
        <tbody>
            <tr style="vertical-align: top;">
                <td style="border: Solid 1px #000080; padding-left: 1px; padding-top: 1px; 
                padding-right: 1px; padding-bottom: 1px;" width="119">
                    <p class="Base" style="font-style: italic; font-size: 10pt;">for the second letter:
                    </p>
                </td>
                <td style="border-top: Solid 1px #000080; border-right: Solid 1px #000080; 
                border-bottom: Solid 1px #000080; padding-left: 1px; padding-top: 1px; 
                padding-right: 1px; padding-bottom: 1px;" width="38">
                    <p class="Base" style="text-align: center; font-weight: bold;">a</p>
                </td>
                <td style="border-top: Solid 1px #000080; border-right: Solid 1px #000080; 
                border-bottom: Solid 1px #000080; padding-left: 1px; padding-top: 1px; 
                padding-right: 1px; padding-bottom: 1px;" width="38">
                    <p class="Base" style="text-align: center; font-weight: bold;">ch</p>
                </td>
                <td style="border-top: Solid 1px #000080; border-right: Solid 1px #000080; 
                border-bottom: Solid 1px #000080; padding-left: 1px; padding-top: 1px; 
                padding-right: 1px; padding-bottom: 1px;" width="38">
                    <p class="Base" style="text-align: center; font-weight: bold;">e</p>
                </td>
                <td style="border-top: Solid 1px #000080; border-right: Solid 1px #000080; 
                border-bottom: Solid 1px #000080; padding-left: 1px; padding-top: 1px; 
                padding-right: 1px; padding-bottom: 1px;" width="38">
                    <p class="Base" style="text-align: center; font-weight: bold;">h-i</p>
                </td>
                <td style="border-top: Solid 1px #000080; border-right: Solid 1px #000080; 
                border-bottom: Solid 1px #000080; padding-left: 1px; padding-top: 1px; 
                padding-right: 1px; padding-bottom: 1px;" width="38">
                    <p class="Base" style="text-align: center; font-weight: bold;">m-p</p>
                </td>
                <td style="border-top: Solid 1px #000080; border-right: Solid 1px #000080; 
                border-bottom: Solid 1px #000080; padding-left: 1px; padding-top: 1px; 
                padding-right: 1px; padding-bottom: 1px;" width="38">
                    <p class="Base" style="text-align: center; font-weight: bold;">t</p>
                </td>
                <td style="border-top: Solid 1px #000080; border-right: Solid 1px #000080; 
                border-bottom: Solid 1px #000080; padding-left: 1px; padding-top: 1px; 
                padding-right: 1px; padding-bottom: 1px;" width="38">
                    <p class="Base" style="text-align: center; font-weight: bold;">u</p>
                </td>
                <td style="border-top: Solid 1px #000080; border-right: Solid 1px #000080; 
                border-bottom: Solid 1px #000080; padding-left: 1px; padding-top: 1px; 
                padding-right: 1px; padding-bottom: 1px;" width="38">
                    <p class="Base" style="text-align: center; font-weight: bold;">w-z</p>
                </td>
            </tr>
            <tr style="vertical-align: top;">
                <td style="border-left: Solid 1px #000080; border-right: Solid 1px #000080; 
                border-bottom: Solid 1px #000080; padding-left: 1px; padding-top: 1px; 
                padding-right: 1px; padding-bottom: 1px;" width="119">
                    <p class="Base" style="font-style: italic; font-size: 10pt;">use number:</p>
                </td>
                <td style="border-right: Solid 1px #000080; border-bottom: Solid 1px #000080; 
                padding-left: 1px; padding-top: 1px; padding-right: 1px; padding-bottom: 1px;" width="38">
                    <p class="Base" style="text-align: center; font-weight: bold;">2</p>
                </td>
                <td style="border-right: Solid 1px #000080; border-bottom: Solid 1px #000080; 
                padding-left: 1px; padding-top: 1px; padding-right: 1px; padding-bottom: 1px;" width="38">
                    <p class="Base" style="text-align: center; font-weight: bold;">3</p>
                </td>
                <td style="border-right: Solid 1px #000080; border-bottom: Solid 1px #000080; 
                padding-left: 1px; padding-top: 1px; padding-right: 1px; padding-bottom: 1px;" width="38">
                    <p class="Base" style="text-align: center; font-weight: bold;">4</p>
                </td>
                <td style="border-right: Solid 1px #000080; border-bottom: Solid 1px #000080; 
                padding-left: 1px; padding-top: 1px; padding-right: 1px; padding-bottom: 1px;" width="38">
                    <p class="Base" style="text-align: center; font-weight: bold;">5</p>
                </td>
                <td style="border-right: Solid 1px #000080; border-bottom: Solid 1px #000080; 
                padding-left: 1px; padding-top: 1px; padding-right: 1px; padding-bottom: 1px;" width="38">
                    <p class="Base" style="text-align: center; font-weight: bold;">6</p>
                </td>
                <td style="border-right: Solid 1px #000080; border-bottom: Solid 1px #000080; 
                padding-left: 1px; padding-top: 1px; padding-right: 1px; padding-bottom: 1px;" width="38">
                    <p class="Base" style="text-align: center; font-weight: bold;">7</p>
                </td>
                <td style="border-right: Solid 1px #000080; border-bottom: Solid 1px #000080; 
                padding-left: 1px; padding-top: 1px; padding-right: 1px; padding-bottom: 1px;" width="38">
                    <p class="Base" style="text-align: center; font-weight: bold;">8</p>
                </td>
                <td style="border-right: Solid 1px #000080; border-bottom: Solid 1px #000080; 
                padding-left: 1px; padding-top: 1px; padding-right: 1px; padding-bottom: 1px;" width="38">
                    <p class="Base" style="text-align: center; font-weight: bold;">9</p>
                </td>
            </tr>
        </tbody>
    </table>
    <p class="Base" style="margin-top: 0; margin-bottom: 0;">&nbsp;</p>
    <p class="Wrap-1A" style="font-style: italic;">After initial letters
        <font style="font-weight: bold;">Qu</font>
    </p>
    <table style="border: Solid 1px #000080; margin-left: .5in;" cellspacing="0">
        <colgroup>
            <col width="120">
            <col width="38">
            <col width="38">
            <col width="38">
            <col width="38">
            <col width="38">
            <col width="38">
            <col width="38">
        </colgroup>
        <tbody>
            <tr style="vertical-align: top;">
                <td style="border: Solid 1px #000080; padding-left: 1px; padding-top: 1px; 
                padding-right: 1px; padding-bottom: 1px;" width="119">
                    <p class="Base" style="font-style: italic; font-size: 10pt;">for the second letter:
                    </p>
                </td>
                <td style="border-top: Solid 1px #000080; border-right: Solid 1px #000080; 
                border-bottom: Solid 1px #000080; padding-left: 1px; padding-top: 1px; 
                padding-right: 1px; padding-bottom: 1px;" width="38">
                    <p class="Base" style="text-align: center; font-weight: bold;">a</p>
                </td>
                <td style="border-top: Solid 1px #000080; border-right: Solid 1px #000080; 
                border-bottom: Solid 1px #000080; padding-left: 1px; padding-top: 1px; 
                padding-right: 1px; padding-bottom: 1px;" width="38">
                    <p class="Base" style="text-align: center; font-weight: bold;">e</p>
                </td>
                <td style="border-top: Solid 1px #000080; border-right: Solid 1px #000080; 
                border-bottom: Solid 1px #000080; padding-left: 1px; padding-top: 1px; 
                padding-right: 1px; padding-bottom: 1px;" width="38">
                    <p class="Base" style="text-align: center; font-weight: bold;">i</p>
                </td>
                <td style="border-top: Solid 1px #000080; border-right: Solid 1px #000080; 
                border-bottom: Solid 1px #000080; padding-left: 1px; padding-top: 1px; 
                padding-right: 1px; padding-bottom: 1px;" width="38">
                    <p class="Base" style="text-align: center; font-weight: bold;">o</p>
                </td>
                <td style="border-top: Solid 1px #000080; border-right: Solid 1px #000080; 
                border-bottom: Solid 1px #000080; padding-left: 1px; padding-top: 1px; 
                padding-right: 1px; padding-bottom: 1px;" width="38">
                    <p class="Base" style="text-align: center; font-weight: bold;">r</p>
                </td>
                <td style="border-top: Solid 1px #000080; border-right: Solid 1px #000080; 
                border-bottom: Solid 1px #000080; padding-left: 1px; padding-top: 1px; 
                padding-right: 1px; padding-bottom: 1px;" width="38">
                    <p class="Base" style="text-align: center; font-weight: bold;">t</p>
                </td>
                <td style="border-top: Solid 1px #000080; border-right: Solid 1px #000080; 
                border-bottom: Solid 1px #000080; padding-left: 1px; padding-top: 1px; 
                padding-right: 1px; padding-bottom: 1px;" width="38">
                    <p class="Base" style="text-align: center; font-weight: bold;">y</p>
                </td>
            </tr>
            <tr style="vertical-align: top;">
                <td style="border-left: Solid 1px #000080; border-right: Solid 1px #000080; 
                border-bottom: Solid 1px #000080; padding-left: 1px; padding-top: 1px; 
                padding-right: 1px; padding-bottom: 1px;" width="119">
                    <p class="Base" style="font-style: italic; font-size: 10pt;">use number:</p>
                </td>
                <td style="border-right: Solid 1px #000080; border-bottom: Solid 1px #000080; 
                padding-left: 1px; padding-top: 1px; padding-right: 1px; padding-bottom: 1px;" width="38">
                    <p class="Base" style="text-align: center; font-weight: bold;">3</p>
                </td>
                <td style="border-right: Solid 1px #000080; border-bottom: Solid 1px #000080; 
                padding-left: 1px; padding-top: 1px; padding-right: 1px; padding-bottom: 1px;" width="38">
                    <p class="Base" style="text-align: center; font-weight: bold;">4</p>
                </td>
                <td style="border-right: Solid 1px #000080; border-bottom: Solid 1px #000080; 
                padding-left: 1px; padding-top: 1px; padding-right: 1px; padding-bottom: 1px;" width="38">
                    <p class="Base" style="text-align: center; font-weight: bold;">5</p>
                </td>
                <td style="border-right: Solid 1px #000080; border-bottom: Solid 1px #000080; 
                padding-left: 1px; padding-top: 1px; padding-right: 1px; padding-bottom: 1px;" width="38">
                    <p class="Base" style="text-align: center; font-weight: bold;">6</p>
                </td>
                <td style="border-right: Solid 1px #000080; border-bottom: Solid 1px #000080; 
                padding-left: 1px; padding-top: 1px; padding-right: 1px; padding-bottom: 1px;" width="38">
                    <p class="Base" style="text-align: center; font-weight: bold;">7</p>
                </td>
                <td style="border-right: Solid 1px #000080; border-bottom: Solid 1px #000080; 
                padding-left: 1px; padding-top: 1px; padding-right: 1px; padding-bottom: 1px;" width="38">
                    <p class="Base" style="text-align: center; font-weight: bold;">8</p>
                </td>
                <td style="border-right: Solid 1px #000080; border-bottom: Solid 1px #000080; 
                padding-left: 1px; padding-top: 1px; padding-right: 1px; padding-bottom: 1px;" width="38">
                    <p class="Base" style="text-align: center; font-weight: bold;">9</p>
                </td>
            </tr>
        </tbody>
    </table>
    <p class="Base" style="margin-top: 0; margin-bottom: 0;">&nbsp;</p>
    <p class="Wrap-1A" style="font-style: italic;">For initial letters
        <font style="font-weight: bold;">Qa-Qt</font>
    </p>
    <table style="border: Solid 1px #000080; margin-left: .5in;" cellspacing="0">
        <colgroup>
            <col width="96">
            <col width="38">
        </colgroup>
        <tbody>
            <tr style="vertical-align: top;">
                <td style="border: Solid 1px #000080; padding-left: 1px; padding-top: 1px; 
                padding-right: 1px; padding-bottom: 1px;" width="95">
                    <p class="Base" style="font-style: italic; font-size: 10pt;">use numbers:</p>
                </td>
                <td style="border-top: Solid 1px #000080; border-right: Solid 1px #000080; 
                border-bottom: Solid 1px #000080; padding-left: 1px; padding-top: 1px; 
                padding-right: 1px; padding-bottom: 1px;" width="38">
                    <p class="Base" style="text-align: center; font-weight: bold;">2-29</p>
                </td>
            </tr>
        </tbody>
    </table>
    <p class="Base" style="margin-top: 0; margin-bottom: 0;">&nbsp;</p>
    <p class="Wrap-1A" style="font-style: italic;">After other initial
        <font style="font-weight: bold;">consonants</font>
    </p>
    <table style="border: Solid 1px #000080; margin-left: .5in;" cellspacing="0">
        <colgroup>
            <col width="120">
            <col width="38">
            <col width="38">
            <col width="38">
            <col width="38">
            <col width="38">
            <col width="38">
            <col width="38">
        </colgroup>
        <tbody>
            <tr style="vertical-align: top;">
                <td style="border: Solid 1px #000080; padding-left: 1px; padding-top: 1px; 
                padding-right: 1px; padding-bottom: 1px;" width="119">
                    <p class="Base" style="font-style: italic; font-size: 10pt;">for the second letter:
                    </p>
                </td>
                <td style="border-top: Solid 1px #000080; border-right: Solid 1px #000080; 
                border-bottom: Solid 1px #000080; padding-left: 1px; padding-top: 1px; 
                padding-right: 1px; padding-bottom: 1px;" width="38">
                    <p class="Base" style="text-align: center; font-weight: bold;">a</p>
                </td>
                <td style="border-top: Solid 1px #000080; border-right: Solid 1px #000080; 
                border-bottom: Solid 1px #000080; padding-left: 1px; padding-top: 1px; 
                padding-right: 1px; padding-bottom: 1px;" width="38">
                    <p class="Base" style="text-align: center; font-weight: bold;">e</p>
                </td>
                <td style="border-top: Solid 1px #000080; border-right: Solid 1px #000080; 
                border-bottom: Solid 1px #000080; padding-left: 1px; padding-top: 1px; 
                padding-right: 1px; padding-bottom: 1px;" width="38">
                    <p class="Base" style="text-align: center; font-weight: bold;">i</p>
                </td>
                <td style="border-top: Solid 1px #000080; border-right: Solid 1px #000080; 
                border-bottom: Solid 1px #000080; padding-left: 1px; padding-top: 1px; 
                padding-right: 1px; padding-bottom: 1px;" width="38">
                    <p class="Base" style="text-align: center; font-weight: bold;">o</p>
                </td>
                <td style="border-top: Solid 1px #000080; border-right: Solid 1px #000080; 
                border-bottom: Solid 1px #000080; padding-left: 1px; padding-top: 1px; 
                padding-right: 1px; padding-bottom: 1px;" width="38">
                    <p class="Base" style="text-align: center; font-weight: bold;">r</p>
                </td>
                <td style="border-top: Solid 1px #000080; border-right: Solid 1px #000080; 
                border-bottom: Solid 1px #000080; padding-left: 1px; padding-top: 1px; 
                padding-right: 1px; padding-bottom: 1px;" width="38">
                    <p class="Base" style="text-align: center; font-weight: bold;">u</p>
                </td>
                <td style="border-top: Solid 1px #000080; border-right: Solid 1px #000080; 
                border-bottom: Solid 1px #000080; padding-left: 1px; padding-top: 1px; 
                padding-right: 1px; padding-bottom: 1px;" width="38">
                    <p class="Base" style="text-align: center; font-weight: bold;">y</p>
                </td>
            </tr>
            <tr style="vertical-align: top;">
                <td style="border-left: Solid 1px #000080; border-right: Solid 1px #000080; 
                border-bottom: Solid 1px #000080; padding-left: 1px; padding-top: 1px; 
                padding-right: 1px; padding-bottom: 1px;" width="119">
                    <p class="Base" style="font-style: italic; font-size: 10pt;">use number:</p>
                </td>
                <td style="border-right: Solid 1px #000080; border-bottom: Solid 1px #000080; 
                padding-left: 1px; padding-top: 1px; padding-right: 1px; padding-bottom: 1px;" width="38">
                    <p class="Base" style="text-align: center; font-weight: bold;">3</p>
                </td>
                <td style="border-right: Solid 1px #000080; border-bottom: Solid 1px #000080; 
                padding-left: 1px; padding-top: 1px; padding-right: 1px; padding-bottom: 1px;" width="38">
                    <p class="Base" style="text-align: center; font-weight: bold;">4</p>
                </td>
                <td style="border-right: Solid 1px #000080; border-bottom: Solid 1px #000080; 
                padding-left: 1px; padding-top: 1px; padding-right: 1px; padding-bottom: 1px;" width="38">
                    <p class="Base" style="text-align: center; font-weight: bold;">5</p>
                </td>
                <td style="border-right: Solid 1px #000080; border-bottom: Solid 1px #000080; 
                padding-left: 1px; padding-top: 1px; padding-right: 1px; padding-bottom: 1px;" width="38">
                    <p class="Base" style="text-align: center; font-weight: bold;">6</p>
                </td>
                <td style="border-right: Solid 1px #000080; border-bottom: Solid 1px #000080; 
                padding-left: 1px; padding-top: 1px; padding-right: 1px; padding-bottom: 1px;" width="38">
                    <p class="Base" style="text-align: center; font-weight: bold;">7</p>
                </td>
                <td style="border-right: Solid 1px #000080; border-bottom: Solid 1px #000080; 
                padding-left: 1px; padding-top: 1px; padding-right: 1px; padding-bottom: 1px;" width="38">
                    <p class="Base" style="text-align: center; font-weight: bold;">8</p>
                </td>
                <td style="border-right: Solid 1px #000080; border-bottom: Solid 1px #000080; 
                padding-left: 1px; padding-top: 1px; padding-right: 1px; padding-bottom: 1px;" width="38">
                    <p class="Base" style="text-align: center; font-weight: bold;">9</p>
                </td>
            </tr>
        </tbody>
    </table>
    <p class="Base" style="margin-top: 0; margin-bottom: 0;">&nbsp;</p>
    <p class="Wrap-1A" style="font-style: italic;">For
        <font style="font-weight: bold;">expansion</font>
    </p>
    <table style="border: Solid 1px #000080; margin-left: .5in;" cellspacing="0">
        <colgroup>
            <col width="120">
            <col width="38">
            <col width="38">
            <col width="38">
            <col width="38">
            <col width="38">
            <col width="38">
            <col width="38">
        </colgroup>
        <tbody>
            <tr style="vertical-align: top;">
                <td style="border: Solid 1px #000080; padding-left: 1px; padding-top: 1px; 
                padding-right: 1px; padding-bottom: 1px;" width="119">
                    <p class="Base" style="font-style: italic; font-size: 10pt;">for the letter:</p>
                </td>
                <td style="border-top: Solid 1px #000080; border-right: Solid 1px #000080; 
                border-bottom: Solid 1px #000080; padding-left: 1px; padding-top: 1px; 
                padding-right: 1px; padding-bottom: 1px;" width="38">
                    <p class="Base" style="text-align: center; font-weight: bold;">a-d</p>
                </td>
                <td style="border-top: Solid 1px #000080; border-right: Solid 1px #000080; 
                border-bottom: Solid 1px #000080; padding-left: 1px; padding-top: 1px; 
                padding-right: 1px; padding-bottom: 1px;" width="38">
                    <p class="Base" style="text-align: center; font-weight: bold;">e-h</p>
                </td>
                <td style="border-top: Solid 1px #000080; border-right: Solid 1px #000080; 
                border-bottom: Solid 1px #000080; padding-left: 1px; padding-top: 1px; 
                padding-right: 1px; padding-bottom: 1px;" width="38">
                    <p class="Base" style="text-align: center; font-weight: bold;">i-l</p>
                </td>
                <td style="border-top: Solid 1px #000080; border-right: Solid 1px #000080; 
                border-bottom: Solid 1px #000080; padding-left: 1px; padding-top: 1px; 
                padding-right: 1px; padding-bottom: 1px;" width="38">
                    <p class="Base" style="text-align: center; font-weight: bold;">m-o</p>
                </td>
                <td style="border-top: Solid 1px #000080; border-right: Solid 1px #000080; 
                border-bottom: Solid 1px #000080; padding-left: 1px; padding-top: 1px; 
                padding-right: 1px; padding-bottom: 1px;" width="38">
                    <p class="Base" style="text-align: center; font-weight: bold;">p-s</p>
                </td>
                <td style="border-top: Solid 1px #000080; border-right: Solid 1px #000080; 
                border-bottom: Solid 1px #000080; padding-left: 1px; padding-top: 1px; 
                padding-right: 1px; padding-bottom: 1px;" width="38">
                    <p class="Base" style="text-align: center; font-weight: bold;">t-v</p>
                </td>
                <td style="border-top: Solid 1px #000080; border-right: Solid 1px #000080; 
                border-bottom: Solid 1px #000080; padding-left: 1px; padding-top: 1px; 
                padding-right: 1px; padding-bottom: 1px;" width="38">
                    <p class="Base" style="text-align: center; font-weight: bold;">w-z</p>
                </td>
            </tr>
            <tr style="vertical-align: top;">
                <td style="border-left: Solid 1px #000080; border-right: Solid 1px #000080; 
                border-bottom: Solid 1px #000080; padding-left: 1px; padding-top: 1px; 
                padding-right: 1px; padding-bottom: 1px;" width="119">
                    <p class="Base" style="font-style: italic; font-size: 10pt;">use number:</p>
                </td>
                <td style="border-right: Solid 1px #000080; border-bottom: Solid 1px #000080; 
                padding-left: 1px; padding-top: 1px; padding-right: 1px; padding-bottom: 1px;" width="38">
                    <p class="Base" style="text-align: center; font-weight: bold;">3</p>
                </td>
                <td style="border-right: Solid 1px #000080; border-bottom: Solid 1px #000080; 
                padding-left: 1px; padding-top: 1px; padding-right: 1px; padding-bottom: 1px;" width="38">
                    <p class="Base" style="text-align: center; font-weight: bold;">4</p>
                </td>
                <td style="border-right: Solid 1px #000080; border-bottom: Solid 1px #000080; 
                padding-left: 1px; padding-top: 1px; padding-right: 1px; padding-bottom: 1px;" width="38">
                    <p class="Base" style="text-align: center; font-weight: bold;">5</p>
                </td>
                <td style="border-right: Solid 1px #000080; border-bottom: Solid 1px #000080; 
                padding-left: 1px; padding-top: 1px; padding-right: 1px; padding-bottom: 1px;" width="38">
                    <p class="Base" style="text-align: center; font-weight: bold;">6</p>
                </td>
                <td style="border-right: Solid 1px #000080; border-bottom: Solid 1px #000080; 
                padding-left: 1px; padding-top: 1px; padding-right: 1px; padding-bottom: 1px;" width="38">
                    <p class="Base" style="text-align: center; font-weight: bold;">7</p>
                </td>
                <td style="border-right: Solid 1px #000080; border-bottom: Solid 1px #000080; 
                padding-left: 1px; padding-top: 1px; padding-right: 1px; padding-bottom: 1px;" width="38">
                    <p class="Base" style="text-align: center; font-weight: bold;">8</p>
                </td>
                <td style="border-right: Solid 1px #000080; border-bottom: Solid 1px #000080; 
                padding-left: 1px; padding-top: 1px; padding-right: 1px; padding-bottom: 1px;" width="38">
                    <p class="Base" style="text-align: center; font-weight: bold;">9</p>
                </td>
            </tr>
        </tbody>
    </table>
    <p class="Indent" style="margin-top: 0; margin-bottom: 0;">&nbsp;</p>
    <p class="Wrap-1A">In the examples below, Cutters without popup links conform to the table above. &nbsp;Cutters for Ilardo, Import, Ito,
        Ivy, Shillingburg, Singer, and Symposium have been developed when a range of letters in the table has been provided,
        e.g.,
        <span style="font-weight: bold;">l-m</span>. &nbsp;Cutters for Scanlon, Qadduri, Qiao, Qvortrup, Chertok, and Clark have been developed when the second
        letter is not explicitly stated in the table, e.g.,
        <span style="font-weight: bold;">h</span> after an initial consonant. &nbsp;In most cases, Cutters must be adjusted to file an entry correctly and
        to allow room for later entries.</p>
    <table style="border: Solid 1px #000080; margin-left: .5in;" cellspacing="0">
        <colgroup>
            <col width="100">
            <col width="100">
            <col width="100">
            <col width="100">
        </colgroup>
        <tbody>
            <tr style="vertical-align: top;">
                <td style="border-top: Solid 1px #000080; border-left: Solid 1px #000080; 
                border-right: Solid 1px #ffffff; border-bottom: Solid 1px #000080; 
                padding-left: 1px; padding-top: 1px; padding-right: 1px; padding-bottom: 1px;" width="100" bgcolor="#000080">
                    <p class="Base" style="text-align: center; 
                                                    font-weight: bold; font-style: italic; 
                                                    font-size: 8pt; color: #ffffff;">Vowels</p>
                </td>
                <td style="border-top: Solid 1px #000080; border-right: Solid 1px #ffffff; 
                border-bottom: Solid 1px #000080; padding-left: 1px; padding-top: 1px; 
                padding-right: 1px; padding-bottom: 1px;" width="100" bgcolor="#000080">
                    <p class="Base" style="text-align: center; font-weight: bold; 
                font-style: italic; font-size: 8pt; color: #ffffff;">S</p>
                </td>
                <td style="border-top: Solid 1px #000080; border-right: Solid 1px #ffffff; 
                border-bottom: Solid 1px #000080; padding-left: 1px; padding-top: 1px; 
                padding-right: 1px; padding-bottom: 1px;" width="100" bgcolor="#000080">
                    <p class="Base" style="text-align: center; font-weight: bold; 
                font-style: italic; font-size: 8pt; color: #ffffff;">Q</p>
                </td>
                <td style="border-top: Solid 1px #000080; border-right: Solid 1px #000080; 
                border-bottom: Solid 1px #000080; padding-left: 1px; padding-top: 1px; 
                padding-right: 1px; padding-bottom: 1px;" width="100" bgcolor="#000080">
                    <p class="Base" style="text-align: center; font-weight: bold; 
                font-style: italic; font-size: 8pt; color: #ffffff;">Consonants</p>
                </td>
            </tr>
            <tr style="vertical-align: top;">
                <td style="border-left: Solid 1px #000080; border-right: Solid 1px #000080; 
                border-bottom: Solid 1px #000080; padding-left: 1px; padding-top: 1px; 
                padding-right: 1px; padding-bottom: 1px;" width="100">
                    <p class="Base" style="font-size: 8pt;">IBM&nbsp;&nbsp;.
                        <font style="font-family: 'Times New Roman';" face="Times New Roman">I</font>26</p>
                </td>
                <td style="border-right: Solid 1px #000080; border-bottom: Solid 1px #000080; 
                padding-left: 1px; padding-top: 1px; padding-right: 1px; padding-bottom: 1px;" width="100">
                    <p class="Base" style="font-size: 8pt;">Sadron &nbsp;.S23
                    </p>
                </td>
                <td style="border-right: Solid 1px #000080; border-bottom: Solid 1px #000080; 
                padding-left: 1px; padding-top: 1px; padding-right: 1px; padding-bottom: 1px;" width="100">
                    <p class="Base" style="font-size: 8pt;">
                        <span style="font-size: 8pt;">
                            <font size="1" style="font-size:8pt;">
                                <a href="javascript:void(0);" id="A3" onmouseover="if (parseInt(navigator.appVersion) >= 4 &amp;&amp; typeof(BSPSPopupOnMouseOver) == 'function') BSPSPopupOnMouseOver(event);"
                                    class="BSSCPopup" onclick="BSSCPopup('popup_adjustments_cutter.htm');return false;">Qadduri</a>&nbsp;&nbsp;.Q28</font>
                        </span>
                    </p>
                </td>
                <td style="border-right: Solid 1px #000080; border-bottom: Solid 1px #000080; 
                padding-left: 1px; padding-top: 1px; padding-right: 1px; padding-bottom: 1px;" width="100">
                    <p class="Base" style="font-size: 8pt;">Campbell&nbsp;&nbsp;.C36</p>
                </td>
            </tr>
            <tr style="vertical-align: top;">
                <td style="border-left: Solid 1px #000080; border-right: Solid 1px #000080; 
                border-bottom: Solid 1px #000080; padding-left: 1px; padding-top: 1px; 
                padding-right: 1px; padding-bottom: 1px;" width="100">
                    <p class="Base" style="font-size: 8pt;">Idaho&nbsp;&nbsp;.
                        <font style="font-family: 'Times New Roman';" face="Times New Roman">I</font>33</p>
                </td>
                <td style="border-right: Solid 1px #000080; border-bottom: Solid 1px #000080; 
                padding-left: 1px; padding-top: 1px; padding-right: 1px; padding-bottom: 1px;" width="100">
                    <p class="Base" style="font-size: 8pt;">
                        <span style="font-size: 8pt;">
                            <font size="1" style="font-size:8pt;">
                                <a href="javascript:void(0);" id="A4" onmouseover="if (parseInt(navigator.appVersion) >= 4 &amp;&amp; typeof(BSPSPopupOnMouseOver) == 'function') BSPSPopupOnMouseOver(event);"
                                    class="BSSCPopup" onclick="BSSCPopup('popup_adjustments_cutter.htm');return false;">Scanlon</a>&nbsp;&nbsp;.S29</font>
                        </span>
                    </p>
                </td>
                <td style="border-right: Solid 1px #000080; border-bottom: Solid 1px #000080; 
                padding-left: 1px; padding-top: 1px; padding-right: 1px; padding-bottom: 1px;" width="100">
                    <p class="Base" style="font-size: 8pt;">
                        <span style="font-size: 8pt;">
                            <font size="1" style="font-size:8pt;">
                                <a href="javascript:void(0);" id="A5" onmouseover="if (parseInt(navigator.appVersion) >= 4 &amp;&amp; typeof(BSPSPopupOnMouseOver) == 'function') BSPSPopupOnMouseOver(event);"
                                    class="BSSCPopup" onclick="BSSCPopup('popup_adjustments_cutter.htm');return false;">Qiao</a>&nbsp;&nbsp;.Q27</font>
                        </span>
                    </p>
                </td>
                <td style="border-right: Solid 1px #000080; border-bottom: Solid 1px #000080; 
                padding-left: 1px; padding-top: 1px; padding-right: 1px; padding-bottom: 1px;" width="100">
                    <p class="Base" style="font-size: 8pt;">Ceccaldi&nbsp;&nbsp;.C43</p>
                </td>
            </tr>
            <tr style="vertical-align: top;">
                <td style="border-left: Solid 1px #000080; border-right: Solid 1px #000080; 
                border-bottom: Solid 1px #000080; padding-left: 1px; padding-top: 1px; 
                padding-right: 1px; padding-bottom: 1px;" width="100">
                    <p class="Base" style="font-size: 8pt;">
                        <span style="font-size: 8pt;">
                            <font size="1" style="font-size:8pt;">
                                <a href="javascript:void(0);" id="A6" onmouseover="if (parseInt(navigator.appVersion) >= 4 &amp;&amp; typeof(BSPSPopupOnMouseOver) == 'function') BSPSPopupOnMouseOver(event);"
                                    class="BSSCPopup" onclick="BSSCPopup('popup_adjustments_cutter.htm');return false;">Ilardo</a> &nbsp;.
                                <font style="font-family: 'Times New Roman'; 
                                            font-size: 8pt;" face="Times New Roman" size="2">I</font>4</font>
                        </span>
                    </p>
                </td>
                <td style="border-right: Solid 1px #000080; border-bottom: Solid 1px #000080; 
                padding-left: 1px; padding-top: 1px; padding-right: 1px; padding-bottom: 1px;" width="100">
                    <p class="Base" style="font-size: 8pt;">Schreiber &nbsp;.S37
                    </p>
                </td>
                <td style="border-right: Solid 1px #000080; border-bottom: Solid 1px #000080; 
                padding-left: 1px; padding-top: 1px; padding-right: 1px; padding-bottom: 1px;" width="100">
                    <p class="Base" style="font-size: 8pt;">Quade&nbsp;&nbsp;.Q33</p>
                </td>
                <td style="border-right: Solid 1px #000080; border-bottom: Solid 1px #000080; 
                padding-left: 1px; padding-top: 1px; padding-right: 1px; padding-bottom: 1px;" width="100">
                    <p class="Base" style="font-size: 8pt;">
                        <span style="font-size: 8pt;">
                            <font size="1" style="font-size:8pt;">
                                <a href="javascript:void(0);" id="A7" onmouseover="if (parseInt(navigator.appVersion) >= 4 &amp;&amp; typeof(BSPSPopupOnMouseOver) == 'function') BSPSPopupOnMouseOver(event);"
                                    class="BSSCPopup" onclick="BSSCPopup('popup_adjustments_cutter.htm');return false;">Chertok</a>&nbsp;&nbsp;.C48</font>
                        </span>
                    </p>
                </td>
            </tr>
            <tr style="vertical-align: top;">
                <td style="border-left: Solid 1px #000080; border-right: Solid 1px #000080; 
                border-bottom: Solid 1px #000080; padding-left: 1px; padding-top: 1px; 
                padding-right: 1px; padding-bottom: 1px;" width="100">
                    <p class="Base" style="font-size: 8pt;">
                        <span style="font-size: 8pt;">
                            <font size="1" style="font-size:8pt;">
                                <a href="javascript:void(0);" id="A8" onmouseover="if (parseInt(navigator.appVersion) >= 4 &amp;&amp; typeof(BSPSPopupOnMouseOver) == 'function') BSPSPopupOnMouseOver(event);"
                                    class="BSSCPopup" onclick="BSSCPopup('popup_adjustments_cutter.htm');return false;">Import</a> &nbsp;.
                                <font style="font-family: 'Times New Roman'; 
                                            font-size: 8pt;" face="Times New Roman" size="2">I</font>48</font>
                        </span>
                    </p>
                </td>
                <td style="border-right: Solid 1px #000080; border-bottom: Solid 1px #000080; 
                padding-left: 1px; padding-top: 1px; padding-right: 1px; padding-bottom: 1px;" width="100">
                    <p class="Base" style="font-size: 8pt;">
                        <span style="font-size: 8pt;">
                            <font size="1" style="font-size:8pt;">
                                <a href="javascript:void(0);" id="A9" onmouseover="if (parseInt(navigator.appVersion) >= 4 &amp;&amp; typeof(BSPSPopupOnMouseOver) == 'function') BSPSPopupOnMouseOver(event);"
                                    class="BSSCPopup" onclick="BSSCPopup('popup_adjustments_cutter.htm');return false;">Shillingburg</a>&nbsp;&nbsp;.S53</font>
                        </span>
                    </p>
                </td>
                <td style="border-right: Solid 1px #000080; border-bottom: Solid 1px #000080; 
                padding-left: 1px; padding-top: 1px; padding-right: 1px; padding-bottom: 1px;" width="100">
                    <p class="Base" style="font-size: 8pt;">Queiroz&nbsp;&nbsp;.Q45</p>
                </td>
                <td style="border-right: Solid 1px #000080; border-bottom: Solid 1px #000080; 
                padding-left: 1px; padding-top: 1px; padding-right: 1px; padding-bottom: 1px;" width="100">
                    <p class="Base" style="font-size: 8pt;">
                        <span style="font-size: 8pt;">
                            <font size="1" style="font-size:8pt;">
                                <a href="javascript:void(0);" id="A10" onmouseover="if (parseInt(navigator.appVersion) >= 4 &amp;&amp; typeof(BSPSPopupOnMouseOver) == 'function') BSPSPopupOnMouseOver(event);"
                                    class="BSSCPopup" onclick="BSSCPopup('popup_adjustments_cutter.htm');return false;">Clark</a> &nbsp;.C58</font>
                        </span>
                    </p>
                </td>
            </tr>
            <tr style="vertical-align: top;">
                <td style="border-left: Solid 1px #000080; border-right: Solid 1px #000080; 
                border-bottom: Solid 1px #000080; padding-left: 1px; padding-top: 1px; 
                padding-right: 1px; padding-bottom: 1px;" width="100">
                    <p class="Base" style="font-size: 8pt;">Inman&nbsp;&nbsp;.
                        <font style="font-family: 'Times New Roman';" face="Times New Roman">I</font>56</p>
                </td>
                <td style="border-right: Solid 1px #000080; border-bottom: Solid 1px #000080; 
                padding-left: 1px; padding-top: 1px; padding-right: 1px; padding-bottom: 1px;" width="100">
                    <p class="Base" style="font-size: 8pt;">
                        <span style="font-size: 8pt;">
                            <font size="1" style="font-size:8pt;">
                                <a href="javascript:void(0);" id="A11" onmouseover="if (parseInt(navigator.appVersion) >= 4 &amp;&amp; typeof(BSPSPopupOnMouseOver) == 'function') BSPSPopupOnMouseOver(event);"
                                    class="BSSCPopup" onclick="BSSCPopup('popup_adjustments_cutter.htm');return false;">Singer</a>&nbsp;&nbsp;.S57</font>
                        </span>
                    </p>
                </td>
                <td style="border-right: Solid 1px #000080; border-bottom: Solid 1px #000080; 
                padding-left: 1px; padding-top: 1px; padding-right: 1px; padding-bottom: 1px;" width="100">
                    <p class="Base" style="font-size: 8pt;">Quinn&nbsp;&nbsp;.Q56</p>
                </td>
                <td style="border-right: Solid 1px #000080; border-bottom: Solid 1px #000080; 
                padding-left: 1px; padding-top: 1px; padding-right: 1px; padding-bottom: 1px;" width="100">
                    <p class="Base" style="font-size: 8pt;">Cobblestone &nbsp;.C63
                    </p>
                </td>
            </tr>
            <tr style="vertical-align: top;">
                <td style="border-left: Solid 1px #000080; border-right: Solid 1px #000080; 
                border-bottom: Solid 1px #000080; padding-left: 1px; padding-top: 1px; 
                padding-right: 1px; padding-bottom: 1px;" width="100">
                    <p class="Base" style="font-size: 8pt;">Ipswich&nbsp;&nbsp;.
                        <font style="font-family: 'Times New Roman';" face="Times New Roman">I</font>67</p>
                </td>
                <td style="border-right: Solid 1px #000080; border-bottom: Solid 1px #000080; 
                padding-left: 1px; padding-top: 1px; padding-right: 1px; padding-bottom: 1px;" width="100">
                    <p class="Base" style="font-size: 8pt;">Stinson&nbsp;&nbsp;.S75</p>
                </td>
                <td style="border-right: Solid 1px #000080; border-bottom: Solid 1px #000080; 
                padding-left: 1px; padding-top: 1px; padding-right: 1px; padding-bottom: 1px;" width="100">
                    <p class="Base" style="font-size: 8pt;">Quorum&nbsp;&nbsp;.Q67</p>
                </td>
                <td style="border-right: Solid 1px #000080; border-bottom: Solid 1px #000080; 
                padding-left: 1px; padding-top: 1px; padding-right: 1px; padding-bottom: 1px;" width="100">
                    <p class="Base" style="font-size: 8pt;">Cryer&nbsp;&nbsp;.C79</p>
                </td>
            </tr>
            <tr style="vertical-align: top;">
                <td style="border-left: Solid 1px #000080; border-right: Solid 1px #000080; 
                border-bottom: Solid 1px #000080; padding-left: 1px; padding-top: 1px; 
                padding-right: 1px; padding-bottom: 1px;" width="100">
                    <p class="Base" style="font-size: 8pt;">
                        <span style="font-size: 8pt;">
                            <font size="1" style="font-size:8pt;">
                                <a href="javascript:void(0);" id="A12" onmouseover="if (parseInt(navigator.appVersion) >= 4 &amp;&amp; typeof(BSPSPopupOnMouseOver) == 'function') BSPSPopupOnMouseOver(event);"
                                    class="BSSCPopup" onclick="BSSCPopup('popup_adjustments_cutter.htm');return false;">Ito</a>&nbsp;&nbsp;.
                                <font style="font-family: 'Times New Roman'; 
                                                font-size: 8pt;" face="Times New Roman" size="2">I</font>87</font>
                        </span>
                    </p>
                </td>
                <td style="border-right: Solid 1px #000080; border-bottom: Solid 1px #000080; 
                padding-left: 1px; padding-top: 1px; padding-right: 1px; padding-bottom: 1px;" width="100">
                    <p class="Base" style="font-size: 8pt;">Suryani&nbsp;&nbsp;.S87</p>
                </td>
                <td style="border-right: Solid 1px #000080; border-bottom: Solid 1px #000080; 
                padding-left: 1px; padding-top: 1px; padding-right: 1px; padding-bottom: 1px;" width="100">
                    <p class="Base" style="font-size: 8pt;">Qutub&nbsp;&nbsp;.Q88</p>
                </td>
                <td style="border-right: Solid 1px #000080; border-bottom: Solid 1px #000080; 
                padding-left: 1px; padding-top: 1px; padding-right: 1px; padding-bottom: 1px;" width="100">
                    <p class="Base" style="font-size: 8pt;">Cuellar&nbsp;&nbsp;.C84</p>
                </td>
            </tr>
            <tr style="vertical-align: top;">
                <td style="border-left: Solid 1px #000080; border-right: Solid 1px #000080; 
                border-bottom: Solid 1px #000080; padding-left: 1px; padding-top: 1px; 
                padding-right: 1px; padding-bottom: 1px;" width="100">
                    <p class="Base" style="font-size: 8pt;">
                        <span style="font-size: 8pt;">
                            <font size="1" style="font-size:8pt;">
                                <a href="javascript:void(0);" id="A13" onmouseover="if (parseInt(navigator.appVersion) >= 4 &amp;&amp; typeof(BSPSPopupOnMouseOver) == 'function') BSPSPopupOnMouseOver(event);"
                                    class="BSSCPopup" onclick="BSSCPopup('popup_adjustments_cutter.htm');return false;">Ivy</a>&nbsp;&nbsp;.
                                <font style="font-family: 'Times New Roman'; 
                                                font-size: 8pt;" face="Times New Roman" size="2">I</font>94</font>
                        </span>
                    </p>
                </td>
                <td style="border-right: Solid 1px #000080; border-bottom: Solid 1px #000080; 
                padding-left: 1px; padding-top: 1px; padding-right: 1px; padding-bottom: 1px;" width="100">
                    <p class="Base" style="font-size: 8pt;">
                        <span style="font-size: 8pt;">
                            <font size="1" style="font-size:8pt;">
                                <a href="javascript:void(0);" id="A14" onmouseover="if (parseInt(navigator.appVersion) >= 4 &amp;&amp; typeof(BSPSPopupOnMouseOver) == 'function') BSPSPopupOnMouseOver(event);"
                                    class="BSSCPopup" onclick="BSSCPopup('popup_adjustments_cutter.htm');return false;">Symposium</a>&nbsp;&nbsp;.S96</font>
                        </span>
                    </p>
                </td>
                <td style="border-right: Solid 1px #000080; border-bottom: Solid 1px #000080; 
                padding-left: 1px; padding-top: 1px; padding-right: 1px; padding-bottom: 1px;" width="100">
                    <p class="Base" style="font-size: 8pt;">
                        <span style="font-size: 8pt;">
                            <font size="1" style="font-size:8pt;">
                                <a href="javascript:void(0);" id="A15" onmouseover="if (parseInt(navigator.appVersion) >= 4 &amp;&amp; typeof(BSPSPopupOnMouseOver) == 'function') BSPSPopupOnMouseOver(event);"
                                    class="BSSCPopup" onclick="BSSCPopup('popup_adjustments_cutter.htm');return false;">Qvortrup</a>&nbsp;&nbsp;.Q97</font>
                        </span>
                    </p>
                </td>
                <td style="border-right: Solid 1px #000080; border-bottom: Solid 1px #000080; 
                padding-left: 1px; padding-top: 1px; padding-right: 1px; padding-bottom: 1px;" width="100">
                    <p class="Base" style="font-size: 8pt;">Cymbal&nbsp;&nbsp;.C96</p>
                </td>
            </tr>
        </tbody>
    </table>
    <p class="Base" style="margin-top: 0; margin-bottom: 0;">&nbsp;</p>
    <p class="Wrap-1A" style="font-weight: bold; font-style: italic;">Note:</p>
    <p class="Wrap-2A">Do not end a Cutter with the numeral
        <font style="font-weight: bold;">1</font>
        or
        <font style="font-weight: bold;">0</font>.</p>
    <p class="Wrap-2A">For ampersands, see
        <a href="../../SCMshelf/scmshelf/g_100_filing_rules_shelf.htm#15._Ampersand_and_other_symbols" class="LinkExternalFile">G 100, Section 15</a>; for initials, see
        <a href="../../SCMshelf/scmshelf/g_100_filing_rules_shelf.htm#11._Initials_and_acronyms"
            class="LinkExternalFile">G 100, Section 11</a>,
        <font style="font-style: italic;">Subject Cataloging Manual: Shelflisting.</font>
    </p>
</div>