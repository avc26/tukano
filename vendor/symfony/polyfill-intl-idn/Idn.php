<?php

/*
 * Copyright (c) 2014 TrueServer B.V.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is furnished
 * to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * Originally forked from
 * https://github.com/true/php-punycode/blob/v2.1.1/src/Punycode.php
 */

namespace Symfony\Polyfill\Intl\Idn;

/**
 * Partial intl implementation in pure PHP.
 *
 * Implemented:
 * - idn_to_ascii - Convert domain name to IDNA ASCII form
 * - idn_to_utf8  - Convert domain name from IDNA ASCII to Unicode
 *
 * @author Renan Gonçalves <renan.saddam@gmail.com>
 * @author Sebastian Kroczek <sk@xbug.de>
 * @author Dmitry Lukashin <dmitry@lukashin.ru>
 * @author Laurent Bassin <laurent@bassin.info>
 *
 * @internal
 */
final class Idn
{
    const INTL_IDNA_VARIANT_2003 = 0;
    const INTL_IDNA_VARIANT_UTS46 = 1;

    private static $encodeTable = array(
        'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l',
        'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x',
        'y', 'z', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9',
    );

    private static $decodeTable = array(
        'a' => 0, 'b' => 1, 'c' => 2, 'd' => 3, 'e' => 4, 'f' => 5,
        'g' => 6, 'h' => 7, 'i' => 8, 'j' => 9, 'k' => 10, 'l' => 11,
        'm' => 12, 'n' => 13, 'o' => 14, 'p' => 15, 'q' => 16, 'r' => 17,
        's' => 18, 't' => 19, 'u' => 20, 'v' => 21, 'w' => 22, 'x' => 23,
        'y' => 24, 'z' => 25, '0' => 26, '1' => 27, '2' => 28, '3' => 29,
        '4' => 30, '5' => 31, '6' => 32, '7' => 33, '8' => 34, '9' => 35,
    );

    public static function idn_to_ascii($domain, $options, $variant, &$idna_info = array())
    {
        if (\PHP_VERSION_ID >= 70200 && self::INTL_IDNA_VARIANT_2003 === $variant) {
            @trigger_error('idn_to_ascii(): INTL_IDNA_VARIANT_2003 is deprecated', E_USER_DEPRECATED);
        }

        if (self::INTL_IDNA_VARIANT_UTS46 === $variant) {
            $domain = mb_strtolower($domain, 'utf-8');
        }

        $parts = explode('.', $domain);

        foreach ($parts as $i => &$part) {
            if ('' === $part && \count($parts) > 1 + $i) {
                return false;
            }
            if (false === $part = self::encodePart($part)) {
                return false;
            }
        }

        $output = implode('.', $parts);

        $idna_info = array(
            'result' => \strlen($output) > 255 ? false : $output,
            'isTransitionalDifferent' => false,
            'errors' => 0,
        );

        return $idna_info['result'];
    }

    public static function idn_to_utf8($domain, $options, $variant, &$idna_info = array())
    {
        if (\PHP_VERSION_ID >= 70200 && self::INTL_IDNA_VARIANT_2003 === $variant) {
            @trigger_error('idn_to_utf8(): INTL_IDNA_VARIANT_2003 is deprecated', E_USER_DEPRECATED);
        }

        $parts = explode('.', $domain);

        foreach ($parts as &$part) {
            $length = \strlen($part);
            if ($length < 1 || 63 < $length) {
                continue;
            }
            if (0 !== strpos($part, 'xn--')) {
                continue;
            }

            $part� ��Ը|�S�@�
t�s?�����+��*���K]��u0���C�\oS�׎�ï!X���Y��A��V�ȷ�j��S�����g>�1u=��k��츏!�����֎����� �;�00_z��<��������7�  �TO��(�5T	��k���YpǑƀ�T��6���G�T�6@���W>��F ���W�Үې[� ¦��&m���c��d]�  �O�eU�
�+ܶ<P-��o�G�����;������Ln&�>X�&-3��i���,x[%��P�U�.��8߇������~�P#���I��=FPvy��HpB&>�*��x	���Z� ]�����^������W-�=RgR�n��#{��%8��-y����s� Vg���̀�]|ǽ�'����᤭z���p^��y���bL�����������'Ε��'��t��J��ŀ<&��W�yT���f#�����{�.8�v% ����A'L��݈����02!a������cɾ�}an(�Q'�t��ډ�����|,�*��
��������o�ꇨ�X������ u]��T�k£}�/��Z�����L#O⛌��e*|� �  �������y��j�����Ț������������˪w�x�e�����������������������ț���{��iY|�����	�ɘ��̚�����	��� �����������ə����ɉ��v����������\ �    �              ��	�   ����̰����  vy������v����
�������
̠v������v���ˠ���
���������                          ����HC���M +C7����(��]C��{���2���(�)kYE�EW�Y�VцJ(��PCU4m�U���d
0%��5g���G����J��]?*��,aP�n���!�= p�S��:�Ӌ�I |)�C�!�
��=h{ [��}��@��z�@�
���tL�N&CV2�Z%��3��H7�f0|GCA/ ��1��l�����m�H i�dT|jn¾?�P;]�2�xEs�xL/��dn����>�g8,��G����F�`2ale �iVj���LQ����x�Uݑ�aL��O�x�N"Mi��{ ���{�5�\O0T��s>%ܓ�=�4��ɏ��xl�"�휞-�6R��n�~ޝ�����^��� ?��3��'�T
�m�[� �F��x���q���prE|	 :Mt3u�� (k��j�G�-��q�wg�������/�1p^_:���ᵍw3v�t���{��q�t�ķ���Tͮu�9�N���M�P��$�ӧ��p:�*��Dj�e�E��9����<��_E����G��`Ջ��B��[J3��
?" ����p��G�)��Nʲw�ř�W�P6��]�q�Ԛ򬖮���>C�K�c�e��]�z���>�����5�wa���?ЇI�;1�y�Pp�c����������5z!i9���̶�1�������%5�as�L�6�Y�$��!�����n�p�F��`����q�)�ױ���b�]�d�(æA �Tյ� YW	�_����Cؖ�.����Yiil��D7�C����:{�����͌1�>��׫7>�pf�B��>����~V�	�ë��Co~���]{>�wnIy��i������0{�mƈ���0|G� �>%��d5u�-O^i|��N�Mu���v���Z@}/����=�?��F�R��mr�D�~��[^<���E.X�D�0�R��o[f���\~~�wd~{���ص0JFF��aDY��E��p��$<�v�@��'����K��N����a;���8��x�z����	�&`��gV�����X%_z2����l>���e�)�f��>[ߚ@Y ܎�Cw�½���3��=L�"$�{� �?��2a�K�,)h�G�( �<l1�I�m݋ͭ�w/R8n�l�q��/vD�4b8��)����s6թ�'�uƕ�F�i�Ia+l��ǋ��Ô��+���{���ZAT�ח��Id��V8��e,�+bZ�O���}�RW2�r��n>#�j��/]yhZu Gո9u�s����6����ie~�|=�?�Օg����2[�;��/����24�}j�G�?j�&�)4�i8�O����ez������hfk�4[�(��/1!t.�7v�H@�N"�k�~�pi�~p�X"����!�.|�����e�����J.�Gu߯��Y�&%�-��U���M]�'�j�_[�ښ�
T<��^�&��!CMs�5`HM�-#��<G�J�8P}��F�U����tc�M����q��z<��ڥ��sL�-[�p���A3�Wx���k�ȱ/�l���-S�b���--�FY���RᒾR{%aÏp�+���	��\�����}�'��'���>���TL�SR�}<Ou�7�-�>�����yeZ���.����ꢾ��� @���#.��,wJ���pBPmŖ�3�˰/�g�0����>	*�{�X�sI������ѫ�s������<��,�E�҂-��&G�qSb�dMe@�J���@e�f����/�e^ ��8�4�0wB��!��ƳkQPlƄe���� -�����E�����4�`����-S˼��̀&'F4EQq�P�ߦϒQ{����!���f�.�F5�#/0wgwS���L�#:�`��Q�9��.�ڀ!�0�W��Q�
�������R��y1�AAAV��B�S2;��84&$���	�� "C���{솒3�cB�ޡ�fݬ��J�93����M��Bz�:
�|~�����9��x��Փ���n|�9�/ b����_�[��������Pϯ��Tx��>2���e8�\�9��B����a9�A��¿u��^h�E�
�MHq�23��&K��r�e��l�T9J��M��%悯e'e66�vn���N�#w����d��.�Rf+k�B��_��x�)[����ӇHn"�t�Y�r�l��d(ѐ��^v����U���2�Pou;7I1F����;B#�/���&TU�j��.\��ݶZW�B!n�[��6����T����ڨ��ﲀ��=��g
�0�Hcd� r�u5	H�U @ä{�4m8T���ï�{�h�l௿g)]���С���х�r��X5�GXR��>ez�M��xhӊ6y:�!�d{������ ,� �('I_c�CB���T���I��w�����-J{M��n0��z ��T#�0�L�� �Q��)���c>=���Z���Q@��A���� �UEw4��4�e��SI�����z}}�t"tz����̹��˭p�8��Iu��%��Δ����I�P���l��0�"��^vܑC/� /�f�(���<sf�� վ��g$�9��>:3���l��h��傄rG2��ɿU.umk�Sm����:O��/���M�i,�4��K�N9Y?c\������)�#cI�Ҳ���]M��T�C�!縛"o�vxZ��ƴ�����j-UQ��釸p�j+F^I�BQO�l`x�g����|Q��j0`#8N���Fw��Ʈ!{ ��t��M
d�-s��]{J�\���p��Y�C�4������(#��UAm�2� (��CSi���JĕK�%�K�<��;-P#ղy�h�����֝���@�"iX�Q�8��$�HgD�9�gs��Yg�d�%S<?��rt=[]��<@�d�6�Nx�[�9R��/;m�ĎE��@ ��ᲃg��0I�d� ѝ�Ĺ��!�t`��s
�h\9��Mef��ς`m�T��+�	�x��$"�o�B��w���aq�S�n[�tc�?V!��Y×�ųm�"Xnd�|.d��LH`ui�*4������|G�q���9���]IW�+�|�-��'���Ʀ�J�~�u1N�A� ��Y7Z8��=��KL��:q��rx� qC=�9�s��P��%�A�){�����πJ��0x���4ו������Z��g��*��*�/<(אu1�8 �GE�*@�q(��>��h�}Z�C�n��aK�q���C���?>�8Lp�2�$��{��!���[�C���>@��&��J�I<�(\�WE2hE�W�U�q����sd >���]1{7:�_g�#ǰ�HF'S�n��$�c��3���)P�Xf�W$_�.��_�_���ܰ*B�&�Lh6���b�H��L����ti�$�Y�K� �Y_��$�^/t��/����1� �Y^������ek�[V���^�rp�Y����Б{��0����!E�Q�'A�~
��.f
�*K��-^@[����;�=-