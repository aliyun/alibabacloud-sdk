// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Imageenhan.Models
{
    public class ImageBlindCharacterWatermarkResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public ImageBlindCharacterWatermarkResponseData Data { get; set; }
        public class ImageBlindCharacterWatermarkResponseData : TeaModel {
            [NameInMap("WatermarkImageURL")]
            [Validation(Required=true)]
            public string WatermarkImageURL { get; set; }
            [NameInMap("TextImageURL")]
            [Validation(Required=true)]
            public string TextImageURL { get; set; }
        };

    }

}
