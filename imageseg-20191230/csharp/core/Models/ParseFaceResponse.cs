// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Imageseg.Models
{
    public class ParseFaceResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public ParseFaceResponseData Data { get; set; }
        public class ParseFaceResponseData : TeaModel {
            [NameInMap("OriginImageURL")]
            [Validation(Required=true)]
            public string OriginImageURL { get; set; }
            [NameInMap("Elements")]
            [Validation(Required=true)]
            public List<ParseFaceResponseDataElements> Elements { get; set; }
            public class ParseFaceResponseDataElements : TeaModel {
                    public string Name { get; set; }
                    public string ImageURL { get; set; }
            }
        };

    }

}
