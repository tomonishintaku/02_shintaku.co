            <?php // REPEAT reread-wrap
                        $i = 0;
                          while($i < 5) {
                            $i++; 

                        if($i == 1){
                            $reread = get_field('reread');
                            $text = get_field('text');
                            $status = get_field('status');

                     echo '<aside class="reread-wrap"><span style="display: block;background: #eee8aa;padding: 0 0.5rem; margin-bottom:1rem;"><time datetime="'.$reread.'">'.$reread.'</time><span style="padding-left:0.5rem;">'.$status.'</span></span>'.$text.'</aside>';
                        }
                        else {
                            $reread = get_field('reread_'.$i);
                            $text = get_field('text_'.$i);

                            if(empty($reread || $text)):

                        else:

                     echo '<aside class="reread-wrap"><span style="display: block;background: #eee8aa;padding: 0 0.5rem; margin-bottom:1rem;"><time datetime="'.$reread.'">'.$reread.'</time><span style="padding-left:0.5rem;">再読</span></span>'.$text.'</aside>';
                        
                        endif;

                        }

  }
            // REPEAT reread-wrap END ?>