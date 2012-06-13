<?php

function aerie_process_css($css, $theme) {
 
    if (!empty($theme->settings->pagebackgroundcolor)) {
        $pagebackgroundcolor = $theme->settings->pagebackgroundcolor;
    } else {
        $pagebackgroundcolor = null;
    }
    $css = aerie_set_pagebackgroundcolor($css, $pagebackgroundcolor);
    
    if (!empty($theme->settings->insidebackgroundcolor)) {
        $insidebackgroundcolor = $theme->settings->insidebackgroundcolor;
    } else {
        $insidebackgroundcolor = null;
    }
    $css = aerie_set_insidebackgroundcolor($css, $insidebackgroundcolor);
    
    if (!empty($theme->settings->framecolor)) {
        $framecolor = $theme->settings->framecolor;
    } else {
        $framecolor = null;
    }
    $css = aerie_set_framecolor($css, $framecolor);
    
    if (!empty($theme->settings->blockcolor)) {
        $blockcolor = $theme->settings->blockcolor;
    } else {
        $blockcolor = null;
    }
    $css = aerie_set_blockcolor($css, $blockcolor);
    
    if (!empty($theme->settings->navbarcolor)) {
        $navbarcolor = $theme->settings->navbarcolor;
    } else {
        $navbarcolor = null;
    }
    $css = aerie_set_navbarcolor($css, $navbarcolor);
    
    if (!empty($theme->settings->custommenucolor)) {
        $custommenucolor = $theme->settings->custommenucolor;
    } else {
        $custommenucolor = null;
    }
    $css = aerie_set_custommenucolor($css, $custommenucolor);
    
    if (!empty($theme->settings->custommenuhovercolor)) {
        $custommenuhovercolor = $theme->settings->custommenuhovercolor;
    } else {
        $custommenuhovercolor = null;
    }
    $css = aerie_set_custommenuhovercolor($css, $custommenuhovercolor);
    
    if (!empty($theme->settings->topiccolor)) {
        $topiccolor = $theme->settings->topiccolor;
    } else {
        $topiccolor = null;
    }
    $css = aerie_set_topiccolor($css, $topiccolor);
    
    if (!empty($theme->settings->highlightedtopiccolor)) {
        $highlightedtopiccolor = $theme->settings->highlightedtopiccolor;
    } else {
        $highlightedtopiccolor = null;
    }
    $css = aerie_set_highlightedtopiccolor($css, $highlightedtopiccolor);
 
    if (!empty($theme->settings->regionwidth)) {
        $regionwidth = $theme->settings->regionwidth;
    } else {
        $regionwidth = null;
    }
    $css = aerie_set_regionwidth($css, $regionwidth);
 
    if (!empty($theme->settings->customcss)) {
        $customcss = $theme->settings->customcss;
    } else {
        $customcss = null;
    }
    $css = aerie_set_customcss($css, $customcss);
 
    return $css;
}

/**
 * Sets the page background colour variable in CSS
 *
 * @param string $css
 * @param mixed $pagebackgroundcolor
 * @return string
 */
function aerie_set_pagebackgroundcolor($css, $pagebackgroundcolor) {
    $tag = '[[setting:pagebackgroundcolor]]';
    $replacement = $pagebackgroundcolor;
    if (is_null($replacement)) {
        $replacement = '#e9e9e9';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Sets the wrapper background colour variable in CSS
 *
 * @param string $css
 * @param mixed $insidebackgroundcolor
 * @return string
 */
function aerie_set_insidebackgroundcolor($css, $insidebackgroundcolor) {
    $tag = '[[setting:insidebackgroundcolor]]';
    $replacement = $insidebackgroundcolor;
    if (is_null($replacement)) {
        $replacement = '#d8d8eb';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Sets the frame colour variable in CSS
 *
 * @param string $css
 * @param mixed $framecolor
 * @return string
 */
function aerie_set_framecolor($css, $framecolor) {
    $tag = '[[setting:framecolor]]';
    $replacement = $framecolor;
    if (is_null($replacement)) {
        $replacement = '#b3b3d9';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Sets the block and docked block colour variable in CSS
 *
 * @param string $css
 * @param mixed $blockcolor
 * @return string
 */
function aerie_set_blockcolor($css, $blockcolor) {
    $tag = '[[setting:blockcolor]]';
    $replacement = $blockcolor;
    if (is_null($replacement)) {
        $replacement = '#b3b3d9';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Sets the navbar, headingblock and dock colour variable in CSS
 *
 * @param string $css
 * @param mixed $navbarcolor
 * @return string
 */
function aerie_set_navbarcolor($css, $navbarcolor) {
    $tag = '[[setting:navbarcolor]]';
    $replacement = $navbarcolor;
    if (is_null($replacement)) {
        $replacement = '#b3b3d9';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Sets the custom menu bar colour variable in CSS
 *
 * @param string $css
 * @param mixed $custommenucolor
 * @return string
 */
function aerie_set_custommenucolor($css, $custommenucolor) {
    $tag = '[[setting:custommenucolor]]';
    $replacement = $custommenucolor;
    if (is_null($replacement)) {
        $replacement = '#b3b3d9';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Sets the custom menu mouseover hover colour variable in CSS
 *
 * @param string $css
 * @param mixed $custommenuhovercolor
 * @return string
 */
function aerie_set_custommenuhovercolor($css, $custommenuhovercolor) {
    $tag = '[[setting:custommenuhovercolor]]';
    $replacement = $custommenuhovercolor;
    if (is_null($replacement)) {
        $replacement = '#ffff80';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Sets the course topic box colour variable in CSS
 *
 * @param string $css
 * @param mixed $topiccolor
 * @return string
 */
function aerie_set_topiccolor($css, $topiccolor) {
    $tag = '[[setting:topiccolor]]';
    $replacement = $topiccolor;
    if (is_null($replacement)) {
        $replacement = '#e3e3e3';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Sets the course highlighted topic box colour variable in CSS
 *
 * @param string $css
 * @param mixed $highlightedtopiccolor
 * @return string
 */
function aerie_set_highlightedtopiccolor($css, $highlightedtopiccolor) {
    $tag = '[[setting:highlightedtopiccolor]]';
    $replacement = $highlightedtopiccolor;
    if (is_null($replacement)) {
        $replacement = '#ffcc66';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Sets the region width variable in CSS
 *
 * @param string $css
 * @param mixed $regionwidth
 * @return string
 */
function aerie_set_regionwidth($css, $regionwidth) {
    $tag = '[[setting:regionwidth]]';
    $doubletag = '[[setting:regionwidthdouble]]';
    $replacement = $regionwidth;
    if (is_null($replacement)) {
        $replacement = 200;
    }
    $css = str_replace($tag, $replacement.'px', $css);
    $css = str_replace($doubletag, ($replacement*2).'px', $css);
    return $css;
}

/**
 * Sets the custom css variable in CSS
 *
 * @param string $css
 * @param mixed $customcss
 * @return string
 */
function aerie_set_customcss($css, $customcss) {
    $tag = '[[setting:customcss]]';
    $replacement = $customcss;
    if (is_null($replacement)) {
        $replacement = '';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}