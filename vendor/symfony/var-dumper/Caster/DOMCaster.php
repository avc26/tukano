5Z20190320015535Z0t0:
+�Y
1,0*0
 �:Z 0 
�0 �0
 �;�� 06
+�Y
1(0&0
+�Y
�
0 �`�
0 � 0	*�H�� � AKG�LU�G���Y�P�_�za:`@��8�Â�R^�ζ�=��_�H����q��rP�(�l���Uc��4��L;��?w���ү6��L8Ҳ��D�x_�j'Ժ>�������uo'�;{���w�˔�� a/�}�{ߕɓ�z�S�����^�$@���7��h:5�Wwʩ����gT�Ek|����� F���9����.���_�3(�ۆR�%�HoOy�&��fd�^bC�d���n��z��1��0��0��0|10	UUS10U
Washington10URedmond10U
Microsoft Corporation1&0$UMicrosoft Time-Stamp PCA 20103   � �~Pjh�.     �0	`�He ��20	*�H��	1*�H��	0/	*�H��	1" Zv]E'hy����;�55�����z�M�f���;0��*�H��	1��0��0��0���n��7�����ʲ
� �_m�0��0���~0|10	UUS10U
Washington10URedmond10U
Microsoft Corporation1&0$UMicrosoft Time-Stamp PCA 20103   � �~Pjh�.     �0�'2��\�I��	��ԪG�rL�0	*�H�� � <~�e
vxK��yF���m�#4?����fqp�m�"�|�L�m����N�Lu��cI�N��M��� \Yu5P�dE��O�� ��6��Z��~��e0n�$��ɐ?��eT��㹘�o՝轵$�� ��Tv~��w�-���f;��!q��8�U�2\�j�/��A�f��iy���R3F,����T��eI�j,_w;s�%gn�1��7tWn0�,M A�#:|AP%I���j���n��'Ŷ�                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          e' => $dom->localName,
            'baseURI' => $dom->baseURI ? new LinkStub($dom->baseURI) : $dom->baseURI,
            'textContent' => new CutStub($dom->textContent),
        ];

        return $a;
    }

    public static function castNameSpaceNode(\DOMNameSpaceNode $dom, array $a, Stub $stub, $isNested)
    {
        $a += [
            'nodeName' => $dom->nodeName,
            'nodeValue' => new CutStub($dom->nodeValue),
            'nodeType' => new ConstStub(self::$nodeTypes[$dom->nodeType], $dom->nodeType),
            'prefix' => $dom->prefix,
            'localName' => $dom->localName,
            'namespaceURI' => $dom->namespaceURI,
            'ownerDocument' => new CutStub($dom->ownerDocument),
            'parentNode' => new CutStub($dom->parentNode),
        ];

        return $a;
    }

    public static function castDocument(\DOMDocument $dom, array $a, Stub $stub, $isNested, $filter = 0)
    {
        $a += [
            'doctype' => $dom->doctype,
            'implementation' => $dom->implementation,
            'documentElement' => new CutStub($dom->documentElement),
            'actualEncoding' => $dom->actualEncoding,
            'encoding' => $dom->encoding,
            'xmlEncoding' => $dom->xmlEncoding,
            'standalone' => $dom->standalone,
            'xmlStandalone' => $dom->xmlStandalone,
            'version' => $dom->version,
            'xmlVersion' => $dom->xmlVersion,
            'strictErrorChecking' => $dom->strictErrorChecking,
            'documentURI' => $dom->documentURI ? new LinkStub($dom->documentURI) : $dom->documentURI,
            'config' => $dom->config,
            'formatOutput' => $dom->formatOutput,
            'validateOnParse' => $dom->validateOnParse,
            'resolveExternals' => $dom->resolveExternals,
            'preserveWhiteSpace' => $dom->preserveWhiteSpace,
            'recover' => $dom->recover,
            'substituteEntities' => $dom->substituteEntities,
        ];

        if (!($filter & Caster::EXCLUDE_VERBOSE)) {
            $formatOutput = $dom->formatOutput;
            $dom->formatOutput = true;
            $a += [Caster::PREFIX_VIRTUAL.'xml' => $dom->saveXML()];
            $dom->formatOutput = $formatOutput;
        }

        return $a;
    }

    public static function castCharacterData(\DOMCharacterData $dom, array $a, Stub $stub, $isNested)
    {
        $a += [
            'data' => $dom->data,
            'length' => $dom->length,
        ];

        return $a;
    }

    public static function castAttr(\DOMAttr $dom, array $a, Stub $stub, $isNested)
    {
        $a += [
            'name' => $dom->name,
            'specified' => $dom->specified,
            'value' => $dom->value,
            'ownerElement' => $dom->ownerElement,
            'schemaTypeInfo' => $dom->schemaTypeInfo,
        ];

        return $a;
    }

    public static function castElement(\DOMElement $dom, array $a, Stub $stub, $isNested)
    {
        $a += [
            'tagName' => $dom->tagName,
            'schemaTypeInfo' => $dom->schemaTypeInfo,
        ];

        return $a;
    }

    public static function castText(\DOMText $dom, array $a, Stub $stub, $isNested)
    {
        $a += [
            'wholeText' => $dom->wholeText,
        ];

        return $a;
    }

    public static function castTypeinfo(\DOMTypeinfo $dom, array $a, Stub $stub, $isNested)
    {
        $a += [
            'typeName' => $dom->typeName,
            'typeNamespace' => $dom->typeNamespace,
        ];

        return $a;
    }

    public static function castDomError(\DOMDomError $dom, array $a, Stub $stub, $isNested)
    {
        $a += [
            'severity' => $dom->severity,
            'message' => $dom->message,
            'type' => $dom->type,
            'relatedException' => $dom->relatedException,
            'related_data' => $dom->related_data,
            'location' => $dom->location,
        ];

        return $a;
    }

    public static function castLocator(\DOMLocator $dom, array $a, Stub $stub, $isNested)
    {
        $a += [
            'lineNumber' => $dom->lineNumber,
            'columnNumber' => $dom->columnNumber,
            'offset' => $dom->offset,
            'relatedNode' => $dom->relatedNode,
            'uri' => $dom->uri ? new LinkStub($dom->uri, $dom->lineNumber) : $dom->uri,
        ];

        return $a;
    }

    public static function castDocumentType(\DOMDocumentType $dom, array $a, Stub $stub, $isNested)
    {
        $a += [
            'name' => $dom->name,
            'entities' => $dom->entities,
            'notations' => $dom->notations,
            'publicId' => $dom->publicId,
            'systemId' => $dom->systemId,
            'internalSubset' => $dom->internalSubset,
        ];

        return $a;
    }

    public static function castNotation(\DOMNotation $dom, array $a, Stub $stub, $isNested)
    {
        $a += [
            'publicId' => $dom->publicId,
            'systemId' => $dom->systemId,
        ];

        return $a;
    }

    public static function castEntity(\DOMEntity $dom, array $a, Stub $stub, $isNested)
    {
        $a += [
            'publicId' => $dom->publicId,
            'systemId' => $dom->systemId,
            'notationName' => $dom->notationName,
            'actualEncoding' => $dom->actualEncoding,
            'encoding' => $dom->encoding,
            'version' => $dom->version,
        ];

        return $a;
    }

    public static function castProcessingInstruction(\DOMProcessingInstruction $dom, array $a, Stub $stub, $isNested)
    {
        $a += [
            'target' => $dom->target,
            'data' => $dom->data,
        ];

        return $a;
    }

    public static function castXPath(\DOMXPath $dom, array $a, Stub $stub, $isNested)
    {
        $a += [
            'document' => $dom->document,
        ];

        return $a;
    }
}
