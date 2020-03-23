// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Imagerecog.Models
{
    public class ClassifyingRubbishResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public ClassifyingRubbishResponseData Data { get; set; }
        public class ClassifyingRubbishResponseData : TeaModel {
            [NameInMap("Sensitive")]
            [Validation(Required=true)]
            public bool? Sensitive { get; set; }
            [NameInMap("Elements")]
            [Validation(Required=true)]
            public List<ClassifyingRubbishResponseDataElements> Elements { get; set; }
            public class ClassifyingRubbishResponseDataElements : TeaModel {
                    public string Category { get; set; }
                    public float? CategoryScore { get; set; }
                    public string Rubbish { get; set; }
                    public float? RubbishScore { get; set; }
            }
        };

    }

}
