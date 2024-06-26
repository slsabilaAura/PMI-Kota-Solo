<style>
    /* 
Import the desired font from Google fonts. 
*/
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap');

    /* 
Define all colors used in this template 
*/
    :root {
        --font-color: black;
        --highlight-color: #60D0E4;
        --header-bg-color: #B8E6F1;
        --footer-bg-color: #BFC0C3;
        --table-img-bg-color: #BFC0C3;
    }

    @page {
        /*
  This CSS highlights how page sizes, margins, and margin boxes are set.
  https://docraptor.com/documentation/article/1067959-size-dimensions-orientation

  Within the page margin boxes content from running elements is used instead of a 
  standard content string. The name which is passed in the element() function can
  be found in the CSS code below in a position property and is defined there by 
  the running() function.
  */
        size: A4;
        margin: 9cm 0 3cm 0;

        @top-left {
            content: element(header);
        }

        @bottom-left {
            content: element(footer);
        }
    }

    /* 
The body itself has no margin but a padding top & bottom 1cm and left & right 2cm.
Additionally the default font family, size and color for the document is defined
here.
*/
    body {
        margin: 0;
        padding: 1cm 2cm;
        color: var(--font-color);
        font-family: 'Montserrat', sans-serif;
        font-size: 10pt;
    }

    /*
The links in the document should not be highlighted by an different color and underline
instead we use the color value inherit to get the current texts color.
*/
    a {
        color: inherit;
        text-decoration: none;
    }

    /*
For the dividers in the document we use an HR element with a margin top and bottom 
of 1cm, no height and only a border top of one millimeter.
*/
    hr {
        margin: 1cm 0;
        height: 0;
        border: 0;
        border-top: 1mm solid var(--highlight-color);
    }

    /*
The page header in our document uses the HTML HEADER element, we define a height 
of 9cm matching the margin top of the page (see @page rule) and a padding left
and right of 2cm. We did not give the page itself a margin of 2cm to ensure that
the background color goes to the edges of the document.

As mentioned above in the comment for the @page the position property with the 
value running(header) makes this HTML element float into the top left page margin
box. This page margin box repeats on every page in case we would have a multi-page
packing slip.
*/
    header {
        height: 9cm;
        padding: 0 2cm;
        position: running(header);
        background-color: var(--header-bg-color);
    }

    /*
For the different sections in the header we use some flexbox and keep space between
with the justify-content property.
*/
    header .headerSection {
        display: flex;
        justify-content: space-between;
    }

    /*
To move the first sections a little down and have more space between the top of 
the document and the logo/company name we give the section a padding top of 5mm.
*/
    header .headerSection:first-child {
        padding-top: .5cm;
    }

    /*
Similar we keep some space at the bottom of the header with the padding-bottom
property.
*/
    header .headerSection:last-child {
        padding-bottom: .5cm;
    }

    /*
Within the header sections we have defined two DIV elements, and the last one in
each headerSection element should only take 35% of the headers width.
*/
    header .headerSection div:last-child {
        width: 35%;
    }

    /*
The last child in the second header section should not be restricted to a 35% width.
*/
    header .headerSection:last-child div:last-child {
        width: auto;
    }

    /*
For the logo, where we use an SVG image and the company text we also use flexbox
to align them correctly.
*/
    header .logoAndName {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    /*
The SVG gets set to a fixed size and get 5mm margin right to keep some distance
to the company name.
*/
    header .logoAndName svg {
        width: 1.5cm;
        height: 1.5cm;
        margin-right: .5cm;
    }

    /*
To ensure the top right section "packing slip" starts on the same level as the Logo &
Name we set a padding top of 1cm for this element.
*/
    header .headerSection .shippingDetails {
        padding-top: 1cm;
    }

    /*
In the second row of header sections, we find the "BILL TO" and "SHIP TO" area where we also
make use of flexbox to achive the desired layout.
*/
    header .headerSection .billTo,
    header .headerSection .shipTo {
        display: flex;
        justify-content: space-between;
    }

    /*
The H3 elements "BILL TO" and "SHIP TO" gets another 75mm margin to the right to keep some 
space between this header and the client's address.
Additionally this header text gets the hightlight color as font color.
*/
    header .headerSection .billTo h3,
    header .headerSection .shipTo h3 {
        margin: 0 .75cm 0 0;
        color: var(--highlight-color);
    }

    /*
The paragraphs within the header sections DIV elements get a small 2px margin top
to ensure its in line with the "ISSUED TO" header text.
*/
    header .headerSection div p {
        margin-top: 2px;
    }

    /*
All header elements and paragraphs within the HTML HEADER tag get a margin of 0.
*/
    header h1,
    header h2,
    header h3,
    header p {
        margin: 0;
    }

    /*
Heading of level 2 and 3 ("packing slip" and "BILL/SHIP TO") need to be written in 
uppercase, so we use the text-transform property for that.
*/
    header h2,
    header h3 {
        text-transform: uppercase;
    }

    /*
The divider in the HEADER element gets a slightly different margin than the 
standard dividers.
*/
    header hr {
        margin: 1cm 0 .5cm 0;
    }

    /*
Our main content is all within the HTML MAIN element. In this template this are
two tables. The one which lists all items and the table which shows us the 
subtotal, tax and total amount.

Both tables get the full width and collapse the border.
*/
    main table {
        width: 100%;
        border-collapse: collapse;
    }

    /*
We put the first tables headers in a THEAD element, this way they repeat on the
next page if our table overflows to multiple pages.

The text color gets set to the highlight color.
*/
    main table thead th {
        height: 1cm;
        color: var(--highlight-color);
    }

    /*
For the last three columns we set a fixed width of 2.5cm, so if we would change
the documents size only the first column with the item name and description grows.
*/
    main table thead th:last-of-type {
        width: 2.5cm;
    }

    /*
The items itself are all with the TBODY element, each cell gets a padding top
and bottom of 2mm and a border bottom of .5mm as a row separator.
*/
    main table tbody td {
        padding: 6mm 0;
    }

    /*
This SVG serves as a placeholder for the product image.
*/
    main table tbody td svg {
        width: 1.2cm;
        height: 1.2cm;
        fill: var(--table-img-bg-color);
        float: left;
        margin-right: .5cm;
    }

    /*
By default text within TH elements is aligned in the center, we do not want that
so we overwrite it with an left alignment.
*/
    main table th {
        text-align: left;
    }

    /*
The notes should have some space above so they do not directly start under the table.
*/
    .notes {
        margin-top: 4cm;
    }

    /*
The content below the tables is placed in a ASIDE element next to the MAIN element.
To ensure this element is always at the bottom of the page, just above the page 
footer, we use the Prince custom property "-prince-float" with the value bottom.

See Page Floats on https://www.princexml.com/howcome/2021/guides/float/.
*/
    aside {
        -prince-float: bottom;
        padding: 0 2cm 2cm 2cm;
    }

    /*
The content of the notes and aside sections gets a width of 50%.
*/
    .notes p,
    aside p {
        margin: 0;
        width: 50%;
    }

    /*
The page footer in our document uses the HTML FOOTER element, we define a height 
of 3cm matching the margin bottom of the page (see @page rule) and a padding left
and right of 2cm. We did not give the page itself a margin of 2cm to ensure that
the background color goes to the edges of the document.

As mentioned above in the comment for the @page the position property with the 
value running(footer) makes this HTML element float into the bottom left page margin
box. This page margin box repeats on every page in case we would have a multi-page
packing slip.

The content inside the footer is aligned with the help of line-height 3cm and a 
flexbox for the child elements.
*/
    footer {
        height: 3cm;
        line-height: 3cm;
        padding: 0 2cm;
        position: running(footer);
        background-color: var(--table-img-bg-color);
        font-size: 8pt;
        display: flex;
        align-items: baseline;
        justify-content: space-between;
    }

    /*
The first link in the footer, which points to the company website is highlighted 
in bold.
*/
    footer a:first-child {
        font-weight: bold;
    }
</style>
<!-- The header element will appear on the top of each page of this packing slip document. -->
<header>
    <div class="headerSection">
        <!-- As a logo we take an SVG element and add the name in an standard H1 element behind it. -->
        <div class="logoAndName">
            <svg>
                <circle cx="50%" cy="50%" r="40%" stroke="black" stroke-width="3" fill="black" />
            </svg>
            <h1>Palang Merah Indoensai (PMI)</h1>
        </div>
        <!-- Details about the order are on the right top side of each page. -->
        <div>
            <h2>SURAKARTA</h2>
            <p>
                <b>Pelapor</b> {{ $report->user->name }}
            </p>
            <p>
                <b>Tanggal</b> {{ $report->timestamp_report }}
            </p>
        </div>
    </div>
    <!-- The two header rows are divided by an blue line, we use the HR element for this. -->
    <hr />

    <!-- The footer contains the company's website and address. To align the address details we will use flexbox in the CSS style. -->
    <footer>
        <a href="https://pmisurakarta.or.id/">
            pmisurakarta.or.id
        </a>
        <a href="mailto:kota_surakarta@pmi.or.id">
            kota_surakarta@pmi.or.id
        </a>
        <span>
            0271 646 505
        </span>
        <span>
            Jl. Kol. Sutarto No. 58 Jebres, Surakarta, Jawa Tengah 57126
        </span>
    </footer>

    <!-- In the main section the table for the separate items is added. Also the notes like gift wrapping are included in the MAIN section. -->
    <main>
    <h1>Laporan Kejadian</h1>
        <table>
            <!-- A THEAD element is used to ensure the header of the table is repeated if it consumes more than one page. -->
            <!-- <thead>
                <tr>
                    <th>Item Description</th>
                    <th>Qty</th>
                </tr>
            </thead> -->
            <!-- The single packing slip items are all within the TBODY of the table. -->
            <tbody>
                <tr>
                    <td>
                        <b>Nama Kejadian</b>
                    </td>
                    <td>
                        {{ $report->nama_bencana }}
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>Tanggal Kejadian</b>
                    </td>
                    <td>
                        {{ $report->tanggal_kejadian }}
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>Lokasi</b>
                    </td>
                    <td>
                        <a href="{{ $googleMapsLink }}">{{ $locationName }}</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>Status</b>
                    </td>
                    <td>
                        {{ $report->status }}
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>Deskripsi</b>
                    </td>
                    <td>
                        {{ $report->keterangan }}
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- Additional notes below the shipping item table -->
        <!-- <div class="notes">
            <b>Notes</b>
            <p>
                Gift wrap items
            </p>
        </div> -->
    </main>
    <!-- Within the aside tag we will put a thank you note which shall be shown below the packing slip table. -->
    <!-- <aside> -->
        <!-- Before the note we will add another blue divider line with the help of the HR tag. -->
        <!-- <hr />
        <b>Thanks for your business!</b>
        <p>
            If you have any questions please contact us at <a href="mailto:help@company.com">help@company.com</a>.
        </p> -->
    <!-- </aside> -->