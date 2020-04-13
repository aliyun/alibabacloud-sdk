// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Imageenhan20190930.Models
{
    public class ChangeImageSizeResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public ChangeImageSizeResponseData Data { get; set; }
        public class ChangeImageSizeResponseData : TeaModel {
            [NameInMap("Url")]
            [Validation(Required=true)]
            public string Url { get; set; }
            [NameInMap("RetainLocation")]
            [Validation(Required=true)]
            public ChangeImageSizeResponseDataRetainLocation RetainLocation { get; set; }
            public class ChangeImageSizeResponseDataRetainLocation : TeaModel {
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
