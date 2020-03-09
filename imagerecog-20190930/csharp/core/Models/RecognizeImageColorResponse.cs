// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Imagerecog.Models
{
    public class RecognizeImageColorResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public RecognizeImageColorResponseData Data { get; set; }
        public class RecognizeImageColorResponseData : TeaModel {
            [NameInMap("ColorTemplateList")]
            [Validation(Required=true)]
            public List<RecognizeImageColorResponseDataColorTemplateList> ColorTemplateList { get; set; }
            public class RecognizeImageColorResponseDataColorTemplateList : TeaModel {
                    public string Color { get; set; }
                    public string Label { get; set; }
                    public float? Percentage { get; set; }
            }
        };

    }

}
