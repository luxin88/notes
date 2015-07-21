<?php
/**
 * easy functions
 */
 
 从NIST获取标准UTC时间
function getUTCTime()
{
    $fp=fsockopen('time.nist.gov',13,$errno,$errstr,90);
    echo fread($fp,2096);
    ///output
    /// 57224 15-07-21 06:29:54 50 0 0 883.4 UTC(NIST) *
}

