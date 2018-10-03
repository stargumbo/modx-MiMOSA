    (function specData(){

        // Ontology ID provided by MODx backend
        const genOntologyId = '[[*gen_ontologyID]]';
        const collectionName = '[[*longtitle:default=`[[*pagetitle]]`]]';
        const dbPassed = 'BrandOntologies';


        // JSON feed
        //const ontologyUrlJson = 'https://spreadsheets.google.com/feeds/list/' + genOntologyId + '/od6/public/values?alt=json';
        const ontologyDbPopulate = 'http://stargumbo.com:3000/api';
        const ontologyDbFetch = 'http://stargumbo.com:3000/dbpull';

        // Accordions
        const accordion_preajax = ['.accordion1', '.accordion3', '.accordion4', '.accordion5', '.accordion6'];
        const accordion_postajax = ['.accordion2'];

        // Empty Containers
        const trimparams = [];

        // Build Tabs
        const firetabs = () => {
            jQuery('.tabs .tab-links a, .tabs .tab-links-top a').on('click', function(e){
                const currentAttrValue = jQuery(this).attr('href');
                jQuery('.tabs ' + currentAttrValue).show().siblings().hide();
                jQuery(this).parent('li').addClass('active').siblings().removeClass('active');
                e.preventDefault();
            });
            jQuery('.tab-links li:first-child, .tab-content div:first-child, .tab-links-top li:first-child, .tab-content-top div:first-child').addClass('active');
        };

        // Build Accordion
        const fireaccordion = (params) => {
            for (let index of params){
                jQuery(index).accordion({
                    active: false,
                    collapsible: true,
                    heightStyle: 'content'
                });
            }
        };

        // Build Map
        const buildMap = (obj) => {
            return Object.keys(obj).reduce((map, key) => map.set(key, obj[key]), new Map());
        };

        // Trim empty containers
        const trimempty = (params) => {
            for (let index of params){
                if(!jQuery.trim(jQuery('div'+index).html()).length){
                    jQuery(index).remove();
                }
            }
        };

        // Fire for loop async
        const asyncForEach = (array, done, iterator) => {
            let i = 0;
            next();
            function next(err) {
                if (err) {
                    done(err);
                } else if (i >= array.length) {
                    done();
                } else if (i < array.length) {
                    let item = array[i++];
                    setTimeout(function() {
                        iterator(item, i - 1, next);
                    }, 0);
                }
            }
        };

        // Dynamically build Tabs based on array
        const buildTabLayout = (tabArray, destination, parentIndex) => {

            // Build tabs structure
            const rowTypeTabs_container = jQuery('<div/>').addClass('tabs');
            const rowTypeTabs_ul = jQuery('<ul/>').addClass('tab-links');
            const rowTypeTabs_contentContainer = jQuery('<div/>').addClass('tab-content');

            // Append Tabs to destination
            rowTypeTabs_container.appendTo(destination);
            rowTypeTabs_ul.appendTo(rowTypeTabs_container);
            rowTypeTabs_contentContainer.appendTo(rowTypeTabs_container);

            // Build tabs per embedTarget
            for (const tabValue of tabArray){
                const randomNum = Math.floor(Math.random() * 1000000);

                const rowTypeTabs_li = jQuery('<li/>', {
                    'class' : `tabtrim-${randomNum}`
                });
                const rowTypeTabs_a = jQuery('<a/>',{
                    'href' : `#tab-${tabValue}-${randomNum}`,
                    'text' : tabValue
                });
                const rowTypeTabs_content = jQuery('<div/>', {
                    'class' : `tab tab-${tabValue} tabtrim-${randomNum}`,
                    'id' : `tab-${tabValue}-${randomNum}`,
                    'data-ontology-type' : tabValue
                });
                const rowDataContainer = jQuery('<pre/>', {
                    'class' : 'line-numbers',
                    'data-code-render' : `${tabValue}-${parentIndex}`
                });

                rowTypeTabs_li.appendTo(rowTypeTabs_ul);
                rowTypeTabs_a.appendTo(rowTypeTabs_li);
                rowTypeTabs_content.appendTo(rowTypeTabs_contentContainer);
                if (typeof parentIndex !== 'undefined'){
                    rowDataContainer.appendTo(rowTypeTabs_content);
                }
                trimparams.push(`.tabtrim-${randomNum}`);
            }
        };

        // Build ontology section
        function fireOntologyBuild(){

            // url (required), options (optional)
            fetch(`${ontologyDbFetch}?collectionname=${collectionName}&dbname=${dbPassed}`)
                .then(res => res.json())
                .then((data) => {

                // Main spreadsheet row map
                const mainMap = buildMap(data[0].rows);

            // Build Timestamp
            const updatedate = data[0].lastupdated;

            // Content arrays
            const codePlatform = ['Web','Android','iOS'];
            const rowPageType = ['Basic', 'Article', 'Video', 'webView'];
            const trackingMethods = ['trackState', 'trackAction'];

            // Columns disabled in code views
            const disablecells = ['node','project','channel','feature','subfeature','servicelevel','productline','comments',
                'trackingmethod',
                'rokufiretv','tvos','appletvlegacy','web','iosandroid','xboxwin10',
                'comments','comscoreqa','omnitureqa'
            ];

            // QA columns
            const qaColumns = ['comscoreqa','omnitureqa'];

            // Build page type tabs
            for (const method of trackingMethods){
                buildTabLayout(rowPageType, document.querySelectorAll(`[data-row-placeholder=${method}]`));
            }

            // Cycle through spreadsheet rows
            for (let [rowIndex, rowValues] of mainMap) {

                // Define accordion header (node value)
                const rowNode = rowIndex + ' - ' + rowValues.node;

                // Extract entry level params
                const {trackingmethod, trackingmethodaction, pagename, mediapartnerid, articleid, webviewurl} = rowValues;

                // Define trackState / trackAction payload string vars per platform
                let payloadAction_android, payloadAction_ios, payloadAction_web;

                // Define QA Statuses
                let qaAllPass, qaComments, qaStatusRow, qaStatusOm, qaStatusCs, qaPassFail;

                // Define code type containers
                let divWebviewParams;

                // Set row's pageType
                let rowType_pageType = '';
                if (webviewurl !== 0){
                    rowType_pageType = 'webView';
                } else if (articleid !== 0){
                    rowType_pageType = 'Article';
                } else if (mediapartnerid !== 0){
                    rowType_pageType = 'Video';
                } else {
                    rowType_pageType = 'Basic';
                }

                // Build row container
                const rowContainer = jQuery('<div/>', {
                    'class' : 'accordion2 codeAccordion',
                    'data-ontology-method' : trackingmethod,
                    'data-ontology-type' : rowType_pageType,
                    'data-ontology-level' : 'row'
                });

                // Build row node text for ontology row container
                const rowNodeName = jQuery('<strong/>').text(rowNode);

                // Build row data container
                const rowInnerContainer = jQuery('<div/>').addClass('container-'+rowIndex);

                // Build Comments section placeholder
                const rowCommentsSection = jQuery('<div/>',{
                    'class' : `container-${rowIndex}-commentsSection commentsSectionStyle`,
                    'html' : '<h3>COMMENTS:</h3>'
                });

                // Build code type containers
                const divCode_android = jQuery('<code/>').addClass('language-java');
                const divCode_ios = jQuery('<code/>').addClass('language-objectivec');
                const divCode_web = jQuery('<code/>').addClass('language-json');
                const divCode_webView = jQuery('<div/>').addClass('webview' + rowIndex);

                // Build QA status checkboxes
                (function qaStatusBuild() {
                    qaStatusRow = jQuery('<span/>', {
                        'class': 'container-' + rowIndex + '-qaStatus status-row'
                    });

                    qaStatusOm = jQuery('<span/>', {
                        'text': 'Omniture: ',
                        'class': 'qaStatusOmniture'
                    }).appendTo(qaStatusRow);

                    qaStatusCs = jQuery('<span/>', {
                        'text': 'Comscore: ',
                        'class': 'qaStatusComscore'
                    }).appendTo(qaStatusRow);

                    qaPassFail = jQuery('<span/>').addClass('qaStatusBox');

                    qaPassFail.clone().appendTo(qaStatusCs).addClass('comscoreqaPassFail' + rowIndex);
                    qaPassFail.clone().appendTo(qaStatusOm).addClass('omnitureqaPassFail' + rowIndex);
                })();

                // Build tab and accordion structure
                (function baseSturctureBuild(){

                    // Attach row container to tracking method container
                    rowContainer.appendTo(`[data-row-placeholder=${trackingmethod}] .tab-${rowType_pageType}`);

                    // Attach row node text to row container
                    rowNodeName.appendTo(rowContainer);

                    // Attach row data container to row conatiner
                    rowInnerContainer.appendTo(rowContainer);

                    if (rowType_pageType !== 'webView') {

                        // Build code tabs
                        buildTabLayout(codePlatform, rowInnerContainer, rowIndex);

                        // Build first rows of code
                        divCode_ios.append('NSDictionary *cdata = @{\n');
                        divCode_web.append('utag_data = {\n');

                        // Attach code types to code containers (built in buildTabLayout)
                        divCode_android.appendTo(`[data-code-render=Android-${rowIndex}]`);
                        divCode_ios.appendTo(`[data-code-render=iOS-${rowIndex}]`);
                        divCode_web.appendTo(`[data-code-render=Web-${rowIndex}]`);
                    } else {

                        // Format webview url to account for existent query params
                        if (webviewurl.includes('?') && webviewurl !== 0) {
                            divWebviewParams = webviewurl + '&';
                        } else {
                            divWebviewParams = webviewurl + '?';
                        }

                        // Add webView data
                        divCode_webView.append('A webview node must suppress the actual content beacon, and pass the visitor ID (as indicated in the SDK update provided) into the URL of the embedded page. <br /><br /><strong>Webview Embed URL -</strong><br />' + divWebviewParams + 'adobe_mc=[APPENDED VISITOR ID]');

                        // Attach webview data
                        divCode_webView.appendTo(rowInnerContainer);
                    }
                })();

                // Build map of row cells
                const rowMap = buildMap(rowValues);

                // Cycle through columns and populate code types
                for (let [cellName, cellValue] of rowMap) {

                    // Format cell data based on object key/value pairs defined in mainObject
                    const payloadActionType = (trackingmethod === 'trackState' ? pagename : trackingmethodaction);

                    // Define payload vars
                    let payloadData_android, payloadData_ios, payloadData_web;

                    // Define final character for code row
                    let rowSeparator = '';

                    // Highlight dynamic column values
                    if (/(\[.*?])/gi.test(cellValue)) {
                        cellValue = cellValue.replace(/(\[.*?])/gi, function replacer(match) {
                            return '<mark>' + match + '</mark>';
                        });
                    }

                    if (rowType_pageType !== 'webView') {

                        // Build code formatted columns
                        payloadData_android = `cdata.put("${cellName}", "${cellValue}");\n`;
                        payloadData_ios = `\t@"${cellName}" : @"${cellValue}"${rowSeparator},\n`;
                        payloadData_web = `\t"${cellName}" : "${cellValue}"${rowSeparator},\n`;

                        // Build last row of code types
                        payloadAction_android = `Analytics.${trackingmethod}("${payloadActionType}", cdata);`;
                        payloadAction_ios = `};\n[ADBMobile ${trackingmethod}:@"${payloadActionType}", data:cdata];`;
                        payloadAction_web = '}';

                        // Check for disabled cells in disablecells array
                        if (disablecells.indexOf(cellName) === -1 && cellValue !== 0) {

                            // Attach data row to code type container
                            divCode_android.append(payloadData_android);
                            divCode_ios.append(payloadData_ios);
                            divCode_web.append(payloadData_web);
                        }
                    }

                    rowNodeName.append(qaStatusRow);

                    if (qaColumns.includes(cellName)){
                        if (cellValue === 'fail' && cellValue !== 0) {
                            jQuery(`.${cellName}PassFail${rowIndex}`).addClass('qaBoxFail');
                            qaAllPass = '1';
                        } else if (cellValue === 'pass' && cellValue !== 0) {
                            jQuery(`.${cellName}PassFail${rowIndex}`).addClass('qaBoxPass');
                            qaAllPass = '1';
                        }
                    }

                    if (cellName === 'comments' && cellValue !== 0) {
                        rowInnerContainer.append(rowCommentsSection);
                        rowCommentsSection.append(cellValue);
                        qaComments = '1';
                    }
                }

                if (qaComments === '1' && qaAllPass !== '1' && qaAllPass !== '2'){
                    qaStatusCs.hide();
                    qaStatusOm.hide();
                    qaStatusRow.append('See Comments');
                }

                // Append payload action to code types if not webView
                if (rowType_pageType !== 'webView') {

                    // Attach last row of code types
                    divCode_android.append(payloadAction_android);
                    divCode_ios.append(payloadAction_ios);
                    divCode_web.append(payloadAction_web);
                }
            }

            // post-fireOntologyBuild
            jQuery('.ontologyupdatedate span').append(updatedate);
            trimempty(trimparams);
            firetabs();
            fireaccordion(accordion_postajax);
            jQuery('pre code').each(function(i, block) {
                hljs.highlightBlock(block);
            });
        });
        }

        fireaccordion(accordion_preajax);
        if (ontologyBuild !== 'no'){
            fireOntologyBuild();
        } else {
            firetabs();
            jQuery('pre code').each(function(i, block) {
                hljs.highlightBlock(block);
            });
        }

        // Pull sheet - populate db - re-pull from db
        jQuery('#updateDatabase').click(function(e){
            jQuery('[data-row-placeholder="trackState"],[data-row-placeholder="trackAction"], .ontologyupdatedate span').empty();

            fetch(`${ontologyDbPopulate}?id=${genOntologyId}&collectionname=${collectionName}&dbname=${dbPassed}&sheet=1&senddata=sendit`)
                .then(res => res.json())
                .then((data) => {
                    fireOntologyBuild();
                });
        });

        // Kill empty menu clicks
        jQuery('.linkdisable').click(function(e){
            e.preventDefault();
            return false;
        });
    })();
