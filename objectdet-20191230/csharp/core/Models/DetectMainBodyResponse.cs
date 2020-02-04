// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Objectdet.Models
{
    public class DetectMainBodyResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public DetectMainBodyResponseData Data { get; set; }
        public class DetectMainBodyResponseData : TeaModel {
            [NameInMap("Location")]
            [Validation(Required=true)]
            public DetectMainBodyResponseDataLocation Location { get; set; }
            public class DetectMainBodyResponseDataLocation : TeaModel {
                [NameInMap("X")]
                [Validation(Required=true)]
                public int? X { get; set; }

                [NameInMap("Y")]
                [Validation(Required=true)]
                public int? Y { get; set; }

                [NameInMap("Width")]
                [Validation(Required=true)]
                public int? Width { get; set; }

                [NameInMap("Height")]
                [Validation(Required=true)]
                public int? Height { get; set; }

            }
        };

    }

}
