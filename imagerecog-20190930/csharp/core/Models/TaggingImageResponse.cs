// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Imagerecog.Models
{
    public class TaggingImageResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public TaggingImageResponseData Data { get; set; }
        public class TaggingImageResponseData : TeaModel {
            [NameInMap("Tags")]
            [Validation(Required=true)]
            public List<TaggingImageResponseDataTags> Tags { get; set; }
            public class TaggingImageResponseDataTags : TeaModel {
                    public float? Confidence { get; set; }
                    public string Value { get; set; }
            }
        };

    }

}
