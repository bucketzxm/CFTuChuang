<?php if(!defined('cfih_i') or !cfih_i) die('This file cannot be directly accessed.');
/**************************************************************************************************************
 *
 *   CF Image Hosting Script
 *   ---------------------------------
 *
 *   Author:    codefuture.co.uk
 *   Version:   1.6.5
 *
 *   You can download the latest version from: http://codefuture.co.uk/projects/imagehost/
 *
 *   Copyright (c) 2010-2013 CodeFuture.co.uk
 *   This file is part of the CF Image Hosting Script.
 *
 *   THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 *   EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *   FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
 *   COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
 *   WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF
 *   OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 *
 *
 *   You may not modify and/or remove any copyright notices or labels on the software on each
 *   page (unless full license is purchase) and in the header of each script source file.
 *
 *   You should have received a full copy of the LICENSE AGREEMENT along with
 *   Codefuture Image Hosting Script. If not, see http://codefuture.co.uk/projects/imagehost/license/.
 *
 *
 *   ABOUT THIS PAGE -----
 *   Used For:     Script Installer
 *   Last edited:  08/01/2013
 *
 *************************************************************************************************************/
	// Check for extension
			echo '<div class="ibox"><h2>检查 PHP 扩展</h2>';

		// GD
			if (!extension_loaded('gd') || !function_exists('gd_info')) {
				user_note('错误：你需要装有 GD 扩展才能使用此程序。<a href="http://php.net/manual/en/book.image.php">http://php.net/manual/en/book.image.php</a>',1);
				$Err_found = true;
			}else{
				user_note('GD 扩展已安装',2);
			}
			flushNow();

		//cURL
			if (!extension_loaded("curl") || !function_exists('curl_init')){
				user_note('错误：未检测到 cURL 扩展，故关闭短地址服务，如果你之后安装了 cURL ，可以自行在设置中开启。<a href="http://php.net/manual/en/book.curl.php">http://php.net/manual/en/book.curl.php</a>',1);
				$settings['SET_SHORT_URL_ON'] = 0;
			}else{
				user_note('cURL 扩展已安装<br/>',2);
			}
			flushNow();

			echo  '</div>';
			flushNow();


	// setup folders
		if(!$Err_found){
			echo  '<div class="ibox"><h2>检查目录</h2>';

		// upload folder
			if(rmkdir(CFUPLOADPATH,false)){
				user_note(CFUPLOADPATH.' - ok',2);
				flushNow();
			}

			if(rmkdir(CFIMAGEPATH)){
				user_note(CFIMAGEPATH.' - ok',2);
				flushNow();
			}

			if(rmkdir(CFTHUMBPATH)){
				user_note(CFTHUMBPATH.' - ok',2);
				flushNow();
			}

			if(rmkdir(CFSMALLTHUMBPATH)){
				user_note(CFSMALLTHUMBPATH.' - ok',2);
				flushNow();
			}

			if(rmkdir(CFDATAPATH)){
				user_note(CFDATAPATH.' - ok',2);
				flushNow();
			}

			if(rmkdir(CFBANDWIDTHPATH)){
				user_note(CFBANDWIDTHPATH.' - ok',2);
				flushNow();
			}

			if(rmkdir(CFIMGCACHEPATH)){
				user_note(CFIMGCACHEPATH.' - ok',2);
				flushNow();
			}

			if(rmkdir(CFIMGTEMPPATH)){
				user_note(CFIMGTEMPPATH.' - ok',2);
				flushNow();
			}

			if(rmkdir(CFBULKUPLOADPATH)){
				user_note(CFBULKUPLOADPATH.' - ok',2);
				flushNow();
			}

			if(rmkdir(CFINCPATH)){
				user_note(CFINCPATH.' - ok',2);
				flushNow();
			}

			if(rmkdir(CFBACKUPPATH)){
				user_note(CFBACKUPPATH.' - ok',2);
				flushNow();
			}

			echo '</div>';
			flushNow();
		}

	// Check for extension
		if(!$Err_found){
			echo '<form method="post" action="?i=db" class="ins">
				<input type="submit" value="下一步：检查数据库" class="button" name="checks" />
			</form>';
		}else{
			echo '<div class="ibox">';
			user_note('请先修复上面的错误后再继续',1);
			echo '</div>';
		}

