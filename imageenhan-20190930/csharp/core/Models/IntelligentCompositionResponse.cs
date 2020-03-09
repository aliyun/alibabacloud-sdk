// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Imageenhan.Models
{
    public class IntelligentCompositionResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public IntelligentCompositionResponseData Data { get; set; }
        public class IntelligentCompositionResponseData : TeaModel {
            [NameInMap("Elements")]
            [Validation(Required=true)]
            public List<IntelligentCompositionResponseDataElements> Elements { get; set; }
            public class IntelligentCompositionResponseDataElements : TeaModel {
                    public int? MinX { get; set; }
                    public int? MinY { get; set; }
                    public int? MaxX { get; set; }
                    public int? MaxY { get; set; }
                    public float? Score { get; set; }
            }
        };

    }

}
