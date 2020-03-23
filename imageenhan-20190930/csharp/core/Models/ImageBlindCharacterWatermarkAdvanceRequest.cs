// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Imageenhan.Models
{
    public class ImageBlindCharacterWatermarkAdvanceRequest : TeaModel {
        [NameInMap("OriginImageURLObject")]
        [Validation(Required=true)]
        public Stream OriginImageURLObject { get; set; }

        [NameInMap("FunctionType")]
        [Validation(Required=true)]
        public string FunctionType { get; set; }

        [NameInMap("Text")]
        [Validation(Required=false)]
        public string Text { get; set; }

        [NameInMap("WatermarkImageURL")]
        [Validation(Required=false)]
        public string WatermarkImageURL { get; set; }

        [NameInMap("OutputFileType")]
        [Validation(Required=false)]
        public string OutputFileType { get; set; }

        [NameInMap("QualityFactor")]
        [Validation(Required=true)]
        public int? QualityFactor { get; set; }

    }

}
