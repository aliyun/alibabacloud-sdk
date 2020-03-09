// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Imagerecog.Models
{
    public class RecognizeSceneResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public RecognizeSceneResponseData Data { get; set; }
        public class RecognizeSceneResponseData : TeaModel {
            [NameInMap("Tags")]
            [Validation(Required=true)]
            public List<RecognizeSceneResponseDataTags> Tags { get; set; }
            public class RecognizeSceneResponseDataTags : TeaModel {
                    public float? Confidence { get; set; }
                    public string Value { get; set; }
            }
        };

    }

}
