// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Imageaudit20191230.Models
{
    public class ScanImageResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public ScanImageResponseData Data { get; set; }
        public class ScanImageResponseData : TeaModel {
            [NameInMap("Results")]
            [Validation(Required=true)]
            public List<ScanImageResponseDataResults> Results { get; set; }
            public class ScanImageResponseDataResults : TeaModel {
                    public string DataId { get; set; }
                    public string TaskId { get; set; }
                    public string ImageURL { get; set; }
                    public List<ScanImageResponseDataResultsSubResults> SubResults { get; set; }
                    public class ScanImageResponseDataResultsSubResults : TeaModel {
                            public string Label { get; set; }
                            public string Suggestion { get; set; }
                            public float? Rate { get; set; }
                            public string Scene { get; set; }
                            public List<ScanImageResponseDataResultsSubResultsFrames> Frames { get; set; }
                            public class ScanImageResponseDataResultsSubResultsFrames : TeaModel {
                                    public float? Rate { get; set; }
                                    public string URL { get; set; }
                            }
                            public List<ScanImageResponseDataResultsSubResultsHintWordsInfoList> HintWordsInfoList { get; set; }
                            public class ScanImageResponseDataResultsSubResultsHintWordsInfoList : TeaModel {
                                    public string Context { get; set; }
                            }
                            public List<ScanImageResponseDataResultsSubResultsProgramCodeDataList> ProgramCodeDataList { get; set; }
                            public class ScanImageResponseDataResultsSubResultsProgramCodeDataList : TeaModel {
                                    public float? X { get; set; }
                                    public float? Y { get; set; }
                                    public float? Width { get; set; }
                                    public float? Height { get; set; }
                            }
                            public List<ScanImageResponseDataResultsSubResultsLogoDataList> LogoDataList { get; set; }
                            public class ScanImageResponseDataResultsSubResultsLogoDataList : TeaModel {
                                    public string Type { get; set; }
                                    public string Name { get; set; }
                                    public float? X { get; set; }
                                    public float? Y { get; set; }
                                    public float? Width { get; set; }
                                    public float? Height { get; set; }
                            }
                            public List<ScanImageResponseDataResultsSubResultsSfaceDataList> SfaceDataList { get; set; }
                            public class ScanImageResponseDataResultsSubResultsSfaceDataList : TeaModel {
                                    public float? X { get; set; }
                                    public float? Y { get; set; }
                                    public float? Width { get; set; }
                                    public float? Height { get; set; }
                                    public List<ScanImageResponseDataResultsSubResultsSfaceDataListFaces> Faces { get; set; }
                                    public class ScanImageResponseDataResultsSubResultsSfaceDataListFaces : TeaModel {
                                            public string Name { get; set; }
                                            public float? Rate { get; set; }
                                            public string Id { get; set; }
                                    }
                            }
                            public List<string> OCRDataList { get; set; }
                    }
            }
        };

    }

}
