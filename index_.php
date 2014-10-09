<?php defined( '_JEXEC' ) or die( 'Restricted access' );?>
<!DOCTYPE html>
<html xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
  <head>
    <jdoc:include type="head" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/boon/css/template.css" type="text/css" />
  </head>
  <body>
    <div id="background2">
      <div id="background1">
        <div id="container">
          <div id="header">
            <div id="logo">
              <jdoc:include type="modules" name="header" /> 
            </div>        
            <div id="navigation">
              <jdoc:include type="modules" name="user4" />
            </div>
          </div>
          <div id="content">
            <div id="top">
              <jdoc:include type="modules" name="top" /> 
            </div>
            <div id="articletop">
              <jdoc:include type="modules" name="user1" />
            </div>
            <div id="contentbackground">
              <div id="articlemiddle">
                <jdoc:include type="component" />
                <jdoc:include type="modules" name="user2" />
              </div>
            </div>
            <div id="articlebottom">
              <jdoc:include type="modules" name="user3" />
            </div>
            <div id="articlecolumn">
              <div id="articleleft">
                <jdoc:include type="modules" name="left" />
              </div>
              <div id="articleright">
                <jdoc:include type="modules" name="right" />
              </div>
            </div>
          </div>
          <div id="footer">
            <jdoc:include type="modules" name="footer" />
          </div>
        </div>
      </div>
    </div>
    <div id="bottom">
      <jdoc:include type="modules" name="bottom" />
    </div>
    <jdoc:include type="modules" name="debug" />
  </body>
</html>